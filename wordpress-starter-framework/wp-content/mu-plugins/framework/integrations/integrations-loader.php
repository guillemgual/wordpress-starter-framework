<?php

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Get integrations configuration
|--------------------------------------------------------------------------
*/

$integrations = project_config('integrations', []);


/*
|--------------------------------------------------------------------------
| Bricks Builder
|--------------------------------------------------------------------------
*/

if (
    ($integrations['bricks'] ?? 'auto') === true ||
    (
        ($integrations['bricks'] ?? 'auto') === 'auto' &&
        class_exists('Bricks\Theme')
    )
) {
    require_once __DIR__ . '/bricks.php';
}


/*
|--------------------------------------------------------------------------
| JetEngine
|--------------------------------------------------------------------------
*/

if (
    ($integrations['jetengine'] ?? 'auto') === true ||
    (
        ($integrations['jetengine'] ?? 'auto') === 'auto' &&
        class_exists('Jet_Engine')
    )
) {
    require_once __DIR__ . '/jetengine.php';
}


/*
|--------------------------------------------------------------------------
| JetFormBuilder
|--------------------------------------------------------------------------
*/

if (
    ($integrations['jetformbuilder'] ?? 'auto') === true ||
    (
        ($integrations['jetformbuilder'] ?? 'auto') === 'auto' &&
        class_exists('Jet_Form_Builder')
    )
) {
    require_once __DIR__ . '/jetformbuilder.php';
}


/*
|--------------------------------------------------------------------------
| Perfmatters
|--------------------------------------------------------------------------
*/

if (
    ($integrations['perfmatters'] ?? 'auto') === true ||
    (
        ($integrations['perfmatters'] ?? 'auto') === 'auto' &&
        defined('PERFMATTERS_VERSION')
    )
) {
    require_once __DIR__ . '/perfmatters.php';
}


/*
|--------------------------------------------------------------------------
| SEOPress
|--------------------------------------------------------------------------
*/

if (
    ($integrations['seopress'] ?? 'auto') === true ||
    (
        ($integrations['seopress'] ?? 'auto') === 'auto' &&
        defined('SEOPRESS_VERSION')
    )
) {
    require_once __DIR__ . '/seopress.php';
}


/*
|--------------------------------------------------------------------------
| SG Security
|--------------------------------------------------------------------------
*/

if (
    ($integrations['sg_security'] ?? 'auto') === true ||
    (
        ($integrations['sg_security'] ?? 'auto') === 'auto' &&
        defined('SG_SECURITY_VERSION')
    )
) {
    require_once __DIR__ . '/sg-security.php';
}


/*
|--------------------------------------------------------------------------
| User Role Editor
|--------------------------------------------------------------------------
*/

if (
    ($integrations['user_role_editor'] ?? 'auto') === true ||
    (
        ($integrations['user_role_editor'] ?? 'auto') === 'auto' &&
        class_exists('URE_Capabilities')
    )
) {
    require_once __DIR__ . '/user-role-editor.php';
}


/*
|--------------------------------------------------------------------------
| WooCommerce
|--------------------------------------------------------------------------
*/

if (
    ($integrations['woocommerce'] ?? 'auto') === true ||
    (
        ($integrations['woocommerce'] ?? 'auto') === 'auto' &&
        class_exists('WooCommerce')
    )
) {
    require_once __DIR__ . '/woocommerce.php';
}