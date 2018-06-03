<?php

require "../app/configs/bootstrap.php";

use app\classes\Uri;
use app\classes\Route;
use app\classes\Layout;

$layout = new Layout;

$uri = Uri::getUri();
$route = Route::getRoute($uri);

require $route;
require $layout->loadMaster('layout');