<?php

require "../app/configs/bootstrap.php";

use app\classes\Uri;
use app\classes\Route;

$uri = Uri::getUri();
$route = Route::getRoute($uri);

require $route;
