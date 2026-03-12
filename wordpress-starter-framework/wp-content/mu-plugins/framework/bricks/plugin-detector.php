<?php

defined('ABSPATH') || exit;

/**
 * Detecta si una clase de plugin existe
 */

function project_has_plugin($class) {
    return class_exists($class);
}

/**
 * Detecta si Bricks está activo
 */

function project_has_bricks() {
    return class_exists('Bricks\Theme');
}

/**
 * Detecta JetEngine
 */

function project_has_jetengine() {
    return class_exists('Jet_Engine');
}

/**
 * Detecta ACF
 */

function project_has_acf() {
    return class_exists('ACF');
}

/**
 * Detecta Perfmatters
 */

function project_has_perfmatters() {
    return defined('PERFMATTERS_VERSION');
}