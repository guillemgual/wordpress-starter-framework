<?php

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Perfmatters compatibility
|--------------------------------------------------------------------------
*/

add_filter('perfmatters_remove_rest_api_links', '__return_true');