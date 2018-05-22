<?php

namespace app\models;

use PDO;

class Connection
{
    public static function connect()
    {
        $config = require "../config.php";

        #dd($config);

        $pdo = new PDO("{$config['db']['driver']}:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", $config['db']['username'], $config['db']['password']);

        // esse atributo exibe as mensagens de erro geradas pelo pdo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // essa opção permite trabalhar com os campos do registro como 
        // se fossem atributos de objetos
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
}
