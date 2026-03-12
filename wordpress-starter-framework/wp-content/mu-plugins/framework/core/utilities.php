<?php

defined('ABSPATH') || exit;

/**
 * Obtener ID de página actual de forma segura
 */

function project_get_current_page_id() {

    if (is_admin()) {
        return null;
    }

    return get_queried_object_id();

}


/**
 * Detectar entorno local
 */

function project_is_local() {

    return in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

}