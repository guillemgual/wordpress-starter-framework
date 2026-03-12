<?php

defined('ABSPATH') || exit;

/**
 * Bloquear acceso directo a archivos sensibles
 */

add_action('init', function () {

    $blocked = [
        'wp-config.php',
        '.env',
        '.git'
    ];

    $request = $_SERVER['REQUEST_URI'];

    foreach ($blocked as $item) {

        if (strpos($request, $item) !== false) {
            wp_die('Access denied.');
        }

    }

});


/**
 * Desactivar REST API user enumeration
 */

add_filter('rest_endpoints', function ($endpoints) {

    if (isset($endpoints['/wp/v2/users'])) {
        unset($endpoints['/wp/v2/users']);
    }

    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }

    return $endpoints;

});