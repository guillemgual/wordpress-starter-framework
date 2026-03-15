<?php

defined('ABSPATH') || exit;

/**
 * Autoloader PSR-4 para las clases del framework.
 * Se encarga de cargar automáticamente los archivos que contienen clases
 * sin necesidad de usar require_once manualmente.
 */
spl_autoload_register(function ($class) {

    // ASIGNACIÓN (=): Definimos el Namespace base de nuestro framework.
    $prefix = 'ProjectFramework\\';

    // ASIGNACIÓN (=): Establecemos la ruta base donde buscará los archivos.
    $base_dir = PROJECT_FRAMEWORK_PATH . '/';

    // ASIGNACIÓN (=): Calculamos la longitud del prefijo para poder recortarlo después.
    $len = strlen($prefix);

    // COMPARACIÓN ESTRICTA (!==): ¿El inicio de la clase que se intenta cargar NO es nuestro prefijo?
    // Si no es de nuestro framework (strncmp devuelve algo distinto a 0), abortamos y dejamos que WP siga su curso.
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // ASIGNACIÓN (=): Obtenemos el nombre de la clase eliminando el prefijo principal.
    $relative_class = substr($class, $len);

    // ASIGNACIÓN (=): Construimos la ruta final del archivo.
    // str_replace cambia las barras de namespace (\) por barras de directorios (/).
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Verificamos si el archivo existe antes de cargarlo para evitar errores fatales (pantalla blanca).
    if (file_exists($file)) {
        require $file;
    }

});