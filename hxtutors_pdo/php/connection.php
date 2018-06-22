<?php

require_once 'config.php';
require_once 'helpers.php';

try {
    $pdo = new PDO("$driver:host=$host;dbname=$dbname;charset=$charset", $username, $password);

    // dispara exceções ao ocorrer um erro e os registros são acessados como objetos
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    dd($e);
}
