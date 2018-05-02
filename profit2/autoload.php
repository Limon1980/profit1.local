<?php

//function __autoload($class)
//{
//    include __DIR__.'/'. str_replace('\\', '/', $class).'.php';
//
//}

function my_app_autoload($class)
{
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

spl_autoload_register('my_app_autoload');

include __DIR__ . '/vendor/autoload.php';

