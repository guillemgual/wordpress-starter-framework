<?php

defined('ABSPATH') || exit;

/**
 * Definir constantes del framework
 */

define('PROJECT_FRAMEWORK_PATH', __DIR__);
define('PROJECT_FRAMEWORK_URL', content_url('mu-plugins/framework'));

/**
 * Cargar autoloader
 */

require_once PROJECT_FRAMEWORK_PATH . '/autoloader.php';

/**
 * Inicializar módulos principales
 */

$modules = [
    'core/helpers.php',
    'core/hooks.php',
    'core/utilities.php',
    
    'admin/admin-cleanup.php',
    
    'security/hardening.php',
    
    'bricks/bricks-helpers.php',
    
    'integrations/acf.php',
    'integrations/jetengine.php',
    'integrations/perfmatters.php'
];

foreach ($modules as $module) {

    $file = PROJECT_FRAMEWORK_PATH . '/' . $module;

    if (file_exists($file)) {
        require_once $file;
    }

}