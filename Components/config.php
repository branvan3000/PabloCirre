<?php
/**
 * Configuration file for Pablo Cirre Portfolio
 * Handles dynamic path generation for local and production environments
 */

// Determine the base URL
// If running on localhost or 127.0.0.1, assume subdirectory structure
$whitelist = array(
    '127.0.0.1',
    '::1',
    'localhost'
);

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist) || (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') !== false)) {
    // Local development environment
    define('BASE_URL', '/PabloCirre');
} else {
    // Production environment (root)
    define('BASE_URL', '');
}
?>
