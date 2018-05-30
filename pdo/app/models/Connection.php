<?php

namespace app\models;

use PDO;

class Connection
{
    public static function connect()
    {
        $config = require "../config.php";

        // para realizar uma conexão PDO é necessário instanciar um objeto com new PDO e
        // passar alguns parâmetros como:
        // primeiro parâmetro
        // driver (no caso, o mysql ou outro),
        // o host (normalmente localhost, mas é possível, dependendo do servidor, ser um ip),
        // dbname (o nome do banco de dados)
        // charset (especifica a codificação dos caracteres, recomendável utf8)
        // segundo parâmetro
        // username (o nome do usuário para o banco de dados)
        // terceiro parâmetro
        // password (senha para acesso ao banco de dados)

        // new PDO('mysql:host=localhost;dbname=cursopdo;charset=utf8'; 'root'; 'root')
        $pdo = new PDO("{$config['db']['driver']}:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", $config['db']['username'], $config['db']['password']);

        // esse atributo exibe as mensagens de erro geradas pelo pdo e, dependendo de como
        // definida, exibirá uma mensagem diferente
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // essa opção permite trabalhar com os campos do registro como
        // se fossem atributos de objetos ao invés de array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}
