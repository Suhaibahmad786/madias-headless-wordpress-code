<?php
/**
 * Headless WordPress Frontend Router
 * Routes all non-API requests to the frontend (matias/index.php)
 */

// Check if request is for WordPress API or admin
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/madias';

// Allow WordPress API, Admin, and Content
if (
    strpos($request_uri, $base_path . '/wp-json') === 0 ||
    strpos($request_uri, $base_path . '/wp-admin') === 0 ||
    strpos($request_uri, $base_path . '/wp-content') === 0 ||
    strpos($request_uri, $base_path . '/wp-includes') === 0 ||
    $request_uri === $base_path . '/index.php'
) {
    // Load WordPress
    require __DIR__ . '/wp-blog-header.php';
} else {
    // Load Frontend
    require __DIR__ . '/matias/index.php';
}
