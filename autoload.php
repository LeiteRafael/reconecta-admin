<?php
spl_autoload_register(function ($className) {
    $paths = [
        __DIR__ . '/src/services/',
        __DIR__ . '/src/models/',
        __DIR__ . '/src/controllers/',
        __DIR__ . '/config/database/',
    ];

    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
