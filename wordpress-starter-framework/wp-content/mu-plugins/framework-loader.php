<?php
/**
 * Plugin Name: Project Framework Loader
 * Description: Loader principal del framework del proyecto.
 */

defined('ABSPATH') || exit;

$framework_bootstrap = __DIR__ . '/framework/bootstrap.php';

if (file_exists($framework_bootstrap)) {
    require_once $framework_bootstrap;
}