<?php

namespace app\classes;

class URI
{
    public static function load()
    {
        // parse_url com o argumento PHP_URL_PATH permite que somente a página,
        // sem parâmetros, seja retornada para a variável $uri
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
