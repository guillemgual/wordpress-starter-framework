<?php

defined('ABSPATH') || exit;

/**
 * Bloquear enumeración de usuarios
 */

if (!is_admin()) {

    if (isset($_REQUEST['author'])) {
        wp_redirect(home_url());
        exit;
    }

}