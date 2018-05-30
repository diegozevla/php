<?php

namespace app\classes;

class Routes 
{
    public static function load($routes, $uri)
    {
        if (array_key_exists($uri, $routes)) {
            return "../app/$routes[$uri].php";
        }

        throw new \Exception("Rota não existe {$uri}", 1);

    }
}
