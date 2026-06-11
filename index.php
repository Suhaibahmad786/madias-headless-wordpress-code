<?php
/**
 * Headless WordPress - Smart Router
 * Routes API/Admin to WordPress, everything else to Frontend
 */

$request_uri = $_SERVER['REQUEST_URI'];

// Check if it's a WordPress API, Admin, or Resources request
if (
    strpos($request_uri, '/wp-json') !== false ||
    strpos($request_uri, '/wp-admin') !== false ||
    strpos($request_uri, '/wp-content') !== false ||
    strpos($request_uri, '/wp-includes') !== false ||
    strpos($request_uri, '/wp-login') !== false ||
    strpos($request_uri, '/xmlrpc.php') !== false ||
    strpos($request_uri, '/wp-cron') !== false
) {
    // Load WordPress
    define( 'WP_USE_THEMES', true );
    require __DIR__ . '/wp-blog-header.php';
} else {
    // Load Frontend
    require __DIR__ . '/matias/index.php';
}
