<?php

namespace MeuProjeto;

use \PDO;

class Connection
{
    public function getConnection()
    {
        require_once 'database_config.php';

        try {
            $dns = "{$config['driver']}:host={$config['host']};";
            $dns .= "dbname={$config['dbname']};charset={$config['charset']}";

            $pdo = new PDO($dns, $config['username'], $config['password']);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }

        return $pdo;
    }
}










