<?php
spl_autoload_register(function ($clase) {
    $directorio_clase = str_replace('\\', '/', $clase);
    if (file_exists($directorio_clase . '.php')) {
        require $directorio_clase . '.php';
    }
});