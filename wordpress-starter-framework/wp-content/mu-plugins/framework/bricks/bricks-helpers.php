<?php

defined('ABSPATH') || exit;

/**
 * Solo ejecutar si Bricks está activo
 */

if (!class_exists('Bricks\Theme')) {
    return;
}

/**
 * Helper para detectar si estamos dentro de Bricks Builder
 */

function project_is_bricks_builder() {

    return isset($_GET['bricks']);

}