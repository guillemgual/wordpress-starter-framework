<?php

defined('ABSPATH') || exit;


/*
|--------------------------------------------------------------------------
| Disable Comments
|--------------------------------------------------------------------------
*/

if (project_config('disable_comments')) {

    // cerrar comentarios en frontend
    add_filter('comments_open', '__return_false', 20, 2);

    // cerrar pings
    add_filter('pings_open', '__return_false', 20, 2);

    // ocultar comentarios existentes
    add_filter('comments_array', '__return_empty_array', 10, 2);

    // eliminar menú de comentarios
    add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });

}


/*
|--------------------------------------------------------------------------
| Remove Default Content
|--------------------------------------------------------------------------
*/

if (project_config('remove_default_content')) {

    add_action('init', function () {

        $default_post = get_page_by_path('hello-world', OBJECT, 'post');

        if ($default_post) {
            wp_delete_post($default_post->ID, true);
        }

    });

}


/*
|--------------------------------------------------------------------------
| Clean Dashboard
|--------------------------------------------------------------------------
*/

if (project_config('clean_dashboard')) {

    add_action('wp_dashboard_setup', function () {

        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        remove_meta_box('dashboard_primary', 'dashboard', 'side');

    });

}