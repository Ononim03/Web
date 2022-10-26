<?php

$loader = function ($className) {
    $parts = explode('\\', $className);
    $end = $parts[count($parts) - 1];
    unset($parts[count($parts) - 1]);
    $str = "./" . implode('/', $parts) . "/";
    $str = strtolower($str);
    $str .= $end . '.php';
    if (file_exists($str)) {
        include $str;
    }

};
spl_autoload_register($loader);