<?php

$routes = [
    'post/([0-9]+)' => 'post/view/$1', // actionView in PostController
    'post' => 'post/index', // actionIndex in PostController

];

return  $routes;