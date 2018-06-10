<?php

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../helper.php";

use PDO;

// instancia o pdo
$pdo = new PDO("{$config['driver']}:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}", $config['user'], $config['pass']);

// define a tabela de propriedades

// dispara uma exceção 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// converte os resultados em um objeto
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

