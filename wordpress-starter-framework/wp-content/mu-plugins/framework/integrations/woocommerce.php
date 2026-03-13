<?php

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| WooCommerce Support
|--------------------------------------------------------------------------
*/

add_action('after_setup_theme', function () {

    add_theme_support('woocommerce');

});