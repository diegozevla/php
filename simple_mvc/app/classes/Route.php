<?php

namespace app\classes;

class Route {
    public static function getRoute($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            // retorna a rota solicitada
            return "../app/{$routes[$uri]}.php";    
        }
        
        // retorna index.php quando não encontrada uma rota
        return "../app/{$routes['/']}.php";        
    }
}