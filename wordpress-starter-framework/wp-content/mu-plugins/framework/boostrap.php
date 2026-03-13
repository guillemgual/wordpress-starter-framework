<?php

/**
 * Project Framework Bootstrap
 * --------------------------------------------------
 * Inicializa el framework del proyecto
 */

if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| Framework Paths
|--------------------------------------------------------------------------
*/

define('PROJECT_FRAMEWORK_PATH', __DIR__);
define('PROJECT_FRAMEWORK_URL', content_url('mu-plugins/framework'));


/*
|--------------------------------------------------------------------------
| Autoloader
|--------------------------------------------------------------------------
*/

require_once PROJECT_FRAMEWORK_PATH . '/autoloader.php';


/*
|--------------------------------------------------------------------------
| Load Configuration
|--------------------------------------------------------------------------
*/

$project_modules = require PROJECT_FRAMEWORK_PATH . '/config/modules.php';

$project_config = require PROJECT_FRAMEWORK_PATH . '/config/project.php';

/*
|--------------------------------------------------------------------------
| Config Helper
|--------------------------------------------------------------------------
*/

function project_config($key, $default = null)
{
    global $project_config;

    return $project_config[$key] ?? $default;
}

/*
|--------------------------------------------------------------------------
| Module Helper
|--------------------------------------------------------------------------
*/

function project_module_enabled($module)
{
    global $project_modules;

    return isset($project_modules[$module]) && $project_modules[$module] === true;
}

function project_config($key, $default = null)
{
    global $project_config;

    return $project_config[$key] ?? $default;
}

/*
|--------------------------------------------------------------------------
| Core Modules
|--------------------------------------------------------------------------
*/

if (project_module_enabled('core_helpers')) {
    require_once PROJECT_FRAMEWORK_PATH . '/core/helpers.php';
}

if (project_module_enabled('core_utilities')) {
    require_once PROJECT_FRAMEWORK_PATH . '/core/utilities.php';
}

if (project_module_enabled('core_hooks')) {
    require_once PROJECT_FRAMEWORK_PATH . '/core/hooks.php';
}

if (project_module_enabled('plugin_detector')) {
    require_once PROJECT_FRAMEWORK_PATH . '/core/plugin-detector.php';
}

if (project_module_enabled('project_setup')) {
    require_once PROJECT_FRAMEWORK_PATH . '/core/project-setup.php';
}

/*
|--------------------------------------------------------------------------
| Admin Modules
|--------------------------------------------------------------------------
*/

if (is_admin()) {

    if (project_module_enabled('admin_cleanup')) {
        require_once PROJECT_FRAMEWORK_PATH . '/admin/admin-cleanup.php';
    }

    if (project_module_enabled('admin_cleanup_pro')) {
        require_once PROJECT_FRAMEWORK_PATH . '/admin/admin-cleanup-pro.php';
    }

}


/*
|--------------------------------------------------------------------------
| Security Modules
|--------------------------------------------------------------------------
*/

if (project_module_enabled('security_hardening')) {
    require_once PROJECT_FRAMEWORK_PATH . '/security/hardening.php';
}

if (project_module_enabled('security_hardening_pro')) {
    require_once PROJECT_FRAMEWORK_PATH . '/security/hardening-pro.php';
}


/*
|--------------------------------------------------------------------------
| Bricks Integrations
|--------------------------------------------------------------------------
*/

if (function_exists('project_has_bricks') && project_has_bricks()) {

    if (project_module_enabled('bricks_helpers')) {
        require_once PROJECT_FRAMEWORK_PATH . '/bricks/bricks-helpers.php';
    }

    if (project_module_enabled('bricks_dynamic_data')) {
        require_once PROJECT_FRAMEWORK_PATH . '/bricks/bricks-dynamic-data.php';
    }

}

/*
|--------------------------------------------------------------------------
| Loader Integrations
|--------------------------------------------------------------------------
*/

require_once PROJECT_FRAMEWORK_PATH . '/integrations/integrations-loader.php';