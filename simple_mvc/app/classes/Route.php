<?php

namespace app\classes;

class Route {

    protected static $routes = [
        '/' => 'controllers/index',
        '/users' => 'controllers/get_users',
        '/contact' => 'controllers/contact',
    ];

    public static function getRoute($uri) {
        if (array_key_exists($uri, self::$routes)) {
            // retorna a rota solicitada
            return '../app/' . self::$routes[$uri] . '.php';
        }
        
        // retorna index.php quando não encontrada uma rota
        return '../app/' . self::$routes['/'] . '.php';
    }
}