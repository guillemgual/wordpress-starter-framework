<?php

defined('ABSPATH') || exit;

/**
 * Limpia elementos innecesarios del <head>
 */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');