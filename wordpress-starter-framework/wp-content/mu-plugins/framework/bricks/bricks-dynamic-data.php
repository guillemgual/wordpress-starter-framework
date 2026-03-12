<?php

defined('ABSPATH') || exit;

if (!project_has_bricks()) {
    return;
}


/**
 * Helper para obtener campo dinámico
 */

function project_get_dynamic_field($field, $post_id = null) {

    if (!$post_id) {
        $post_id = get_the_ID();
    }

    if (function_exists('get_field')) {
        return get_field($field, $post_id);
    }

    return get_post_meta($post_id, $field, true);

}