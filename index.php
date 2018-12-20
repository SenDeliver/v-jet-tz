<?php

function debug($obj)
{
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";
}

//Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Подключение файлов системы
require __DIR__ . '/vendor/autoload.php'; //Composer autoload

//Вызов Router
$router = new \liw\components\Router();
$router->run();

if ($_SERVER['REQUEST_URI'] == '/'){
    header('Location: /post/');
}

