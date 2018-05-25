<?php

require "../bootstrap.php";

use app\classes\URI;
use app\classes\Routes;
use app\classes\Layout;

// especifo as rotas para o aplicativo
// para essas rotas funcionarem corretamente é importante que no virtual host 
// o domínio seja direcionado para o arquivo index.php
$routes = [
    '/' => 'controllers/index',
    '/create_user' => 'controllers/create_user',
    //'/contato' => 'controllers/index.php',
];

$uri = URI::load();
$layout = new Layout;

require Routes::load($routes, $uri);
require $layout->master('layout');



