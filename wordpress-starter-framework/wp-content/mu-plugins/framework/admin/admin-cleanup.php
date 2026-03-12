<?php

defined('ABSPATH') || exit;

/**
 * Ocultar widgets innecesarios del dashboard
 */

add_action('wp_dashboard_setup', function () {

    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');

});