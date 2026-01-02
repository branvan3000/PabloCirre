<?php
/**
 * Shared Sitemap Extractor API
 * Can be used by any project (including Lab 5).
 * 
 * POST /Tools/api/sitemap.php
 * Body: { "url": "https://..." }
 */

require_once 'SitemapExtractor.php';

// Allow CORS so other domains/subdomains can use it if needed
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Method not allowed. Use POST.']);
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$sitemapUrl = $data['url'] ?? '';

if (empty($sitemapUrl) || !filter_var($sitemapUrl, FILTER_VALIDATE_URL)) {
    echo json_encode(['error' => 'Invalid Sitemap URL']);
    exit;
}

$extractor = new SitemapExtractor();
// Use the Chrome user agent
$extractor->setUserAgent('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');

$allUrls = $extractor->extract($sitemapUrl);
$errors = $extractor->getErrors();

if (empty($allUrls)) {
    $msg = 'No URLs found in sitemap.';
    if (!empty($errors)) {
        $msg .= ' Debug: ' . implode('; ', array_slice($errors, 0, 3));
    }
    echo json_encode(['error' => $msg]);
} else {
    echo json_encode([
        'success' => true,
        'count' => count($allUrls),
        'urls' => $allUrls,
        'debug_errors' => $errors
    ]);
}
