<?php

defined('ABSPATH') || exit;

/**
 * Limpiar widgets del dashboard
 */

add_action('wp_dashboard_setup', function () {

    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');

});


/**
 * Ocultar barra admin en frontend para usuarios no admin
 */

add_filter('show_admin_bar', function ($show) {

    if (!current_user_can('administrator')) {
        return false;
    }

    return $show;

});


/**
 * Limpiar footer del admin
 */

add_filter('admin_footer_text', function () {

    return 'Sistema desarrollado con WordPress Framework';

});