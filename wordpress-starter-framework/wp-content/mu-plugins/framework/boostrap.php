<?php

defined('ABSPATH') || exit;

/**
 * Constantes del framework
 */

define('PROJECT_FRAMEWORK_PATH', __DIR__);
define('PROJECT_FRAMEWORK_URL', content_url('mu-plugins/framework'));

/**
 * Autoloader
 */

require_once PROJECT_FRAMEWORK_PATH . '/autoloader.php';


/**
 * Función para cargar módulos de carpeta
 */

function project_load_modules($folder) {

    $path = PROJECT_FRAMEWORK_PATH . '/' . $folder;

    if (!is_dir($path)) {
        return;
    }

    foreach (glob($path . '/*.php') as $file) {
        require_once $file;
    }

}


/**
 * Cargar módulos base
 */

project_load_modules('core');


/**
 * Cargar módulos admin
 */

if (is_admin()) {
    project_load_modules('admin');
}


/**
 * Seguridad siempre
 */

project_load_modules('security');


/**
 * Integración Bricks
 */

if (project_has_bricks()) {
    project_load_modules('bricks');
}


/**
 * Integraciones de plugins
 */

project_load_modules('integrations');