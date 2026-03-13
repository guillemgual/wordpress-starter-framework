<?php

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| JetEngine Helpers
|--------------------------------------------------------------------------
*/

function project_get_meta($field, $post_id = null)
{

    if (!$post_id) {
        $post_id = get_the_ID();
    }

    return get_post_meta($post_id, $field, true);

}