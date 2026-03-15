<?php
/**
 * Plugin Name: Project Framework Loader
 * Description: Loader principal del framework del proyecto.
 */

defined('ABSPATH') || exit;

// Definimos la constante de ruta para usarla en todo el Framework
// El operador de comparación 'defined' evita errores si ya estuviera definida
if ( ! defined( 'MY_FRAMEWORK_PATH' ) ) {
    define( 'MY_FRAMEWORK_PATH', __DIR__ . '/framework/' );
}

$framework_bootstrap = MY_FRAMEWORK_PATH . 'bootstrap.php';

if ( file_exists( $framework_bootstrap ) ) {
    require_once $framework_bootstrap;
}