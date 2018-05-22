<?php

require "../bootstrap.php";

use app\classes\URI;
use app\classes\Routes;

// especifo as rotas para o aplicativo
// para essas rotas funcionarem corretamente é importante que no virtual host 
// o domínio seja direcionado para o arquivo index.php
$routes = [
    '/' => 'controllers/index.php',
    //'/contato' => 'controllers/index.php',
];

$uri = URI::load();

require Routes::load($routes, $uri);



