<?php
/**
 * Class SitemapExtractor
 * 
 * A robust, recursive Sitemap extractor for PHP.
 * Capable of parsing standard sitemaps, sitemap indices, and gzipped sitemaps.
 *
 * Usage:
 * $extractor = new SitemapExtractor();
 * $urls = $extractor->extract('https://example.com/sitemap.xml');
 * 
 * @package PabloCirre\Tools
 * @version 1.3
 */
class SitemapExtractor
{
    /** @var array List of extracted URLs */
    private $urls = [];

    /** @var array List of processed sitemap URLs to prevent infinite loops */
    private $processedSitemaps = [];

    /** @var int Maximum number of sitemaps to recurse into */
    private $maxSitemaps = 50;

    /** @var array List of errors encountered */
    private $errors = [];

    /** @var string User Agent to use for requests (mimics Chrome) */
    private $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';

    /**
     * Set a custom User Agent.
     * 
     * @param string $ua
     */
    public function setUserAgent($ua)
    {
        $this->userAgent = $ua;
    }

    /**
     * Get list of errors.
     * 
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Extract URLs from a Sitemap URL recursively.
     *
     * @param string $url The URL of the sitemap or sitemap index.
     * @return array The list of found URLs.
     */
    public function extract($url)
    {
        $this->processSitemap($url);
        return array_unique($this->urls);
    }

    /**
     * Internal recursive processor.
     *
     * @param string $url
     */
    private function processSitemap($url)
    {
        if (in_array($url, $this->processedSitemaps)) {
            return;
        }

        if (count($this->processedSitemaps) >= $this->maxSitemaps) {
            $this->errors[] = "Max sitemap limit reached at $url";
            return;
        }

        $this->processedSitemaps[] = $url;

        $content = $this->fetchContent($url);
        if ($content === false) {
            return;
        }

        // Check if content is gzipped (starts with magic bytes 1f 8b)
        if (substr($content, 0, 2) === "\x1f\x8b") {
            $decoded = @gzdecode($content);
            if ($decoded !== false) {
                $content = $decoded;
            } else {
                $this->errors[] = "Failed to decode gzip content from $url";
                return;
            }
        }

        // Trim content to avoid whitespace issues
        $content = trim($content);

        try {
            libxml_use_internal_errors(true);

            // Try simplexml_load_string which is robust
            $xml = @simplexml_load_string($content);

            if ($xml === false) {
                $xmlErrors = libxml_get_errors();
                $errorMsg = '';
                foreach ($xmlErrors as $e) {
                    $errorMsg .= trim($e->message) . '; ';
                }
                libxml_clear_errors();
                // Add snippet of content for debug
                $snippet = substr($content, 0, 100);
                $this->errors[] = "XML Parse Error in $url: $errorMsg (Snippet: $snippet)";
                return;
            }

            // Detect type
            $rootName = strtolower($xml->getName());

            if ($rootName === 'sitemapindex') {
                foreach ($xml->sitemap as $sitemap) {
                    $loc = (string) $sitemap->loc;
                    if (!empty($loc)) {
                        $this->processSitemap(trim($loc));
                    }
                }
            } elseif ($rootName === 'urlset') {
                foreach ($xml->url as $urlItem) {
                    $loc = (string) $urlItem->loc;
                    if (!empty($loc)) {
                        $this->urls[] = trim($loc);
                    }
                }
            } else {
                $this->errors[] = "Unknown XML root '$rootName' in $url";
            }

        } catch (Exception $e) {
            $this->errors[] = "Exception processing XML from $url: " . $e->getMessage();
        }
    }

    /**
     * Fetch content via HTTP(S).
     *
     * @param string $url
     * @return string|false
     */
    private function fetchContent($url)
    {
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: " . $this->userAgent . "\r\n" .
                    "Accept: */*\r\n" .
                    "Connection: close\r\n",
                'timeout' => 10,
                'ignore_errors' => true
            ],
            'ssl' => [
                "verify_peer" => false,
                "verify_peer_name" => false,
            ]
        ];

        $context = stream_context_create($options);
        $content = @file_get_contents($url, false, $context);

        if ($content === false) {
            $error = error_get_last();
            $this->errors[] = "HTTP request failed for $url: " . ($error['message'] ?? 'Unknown error');
        }

        if ($content !== false && strlen($content) < 10) {
            $this->errors[] = "Empty or too short content from $url";
            return false;
        }

        return $content;
    }
}
