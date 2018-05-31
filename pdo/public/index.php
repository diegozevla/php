<?php

require "../bootstrap.php";

use app\classes\URI;
use app\classes\Routes;
use app\classes\Layout;

// rotas para o aplicativo
// para funcionarem adequadamente é necessário configurar o arquivo .htaccess
// e definir um host virtual
$routes = [
    '/' => 'controllers/home',
    '/user_create' => 'controllers/user_create',
    '/user_store' => 'controllers/user_store',
];

// em uma url www.foobar.com/user_create deverá retornar /user_create
$uri = URI::load();

// esta classe, instanciada aqui, ficará disponível para os arquivos incluídos posteriormente no código
$layout = new Layout;

// deverá retornar o valor da chave especificada em $uri, ou gerar um erro, e carregar o arquivo
// no caso, o arquivo a ser carregado está na pasta controllers
require Routes::load($routes, $uri);



require $layout->master('layout');
