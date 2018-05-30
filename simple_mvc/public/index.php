<?php

require "../app/configs/bootstrap.php";

use app\classes\Uri;
use app\classes\Route;

$routes = [
    '/' => 'controllers/index',
    '/contato' => 'controllers/contato',
];

$uri = Uri::getUri();
$route = Route::getRoute($uri, $routes);

require $route;
