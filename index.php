<?php

include_once 'config.php';

spl_autoload_register(function ($class) {
    $classFileName = 'classes' . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
    if(file_exists($classFileName)){
        include_once $classFileName;
        return true;
    }else{
        return false;
    }
});

Bootstrap::init();