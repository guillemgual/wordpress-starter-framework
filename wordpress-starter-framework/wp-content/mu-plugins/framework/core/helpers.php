<?php

defined('ABSPATH') || exit;

/**
 * Obtener opción ACF de forma segura
 */

function project_get_option($field) {

    if (!function_exists('get_field')) {
        return null;
    }

    return get_field($field, 'option');

}


/**
 * Verificar si plugin está activo
 */

function project_is_plugin_active($plugin_class) {

    return class_exists($plugin_class);

}