<?php

require_once 'connection.php';

// tipo de consulta, sem tratamento, realizada como a função mysql (em desuso)
// $usuarios = $pdo->query("SELECT * FROM pessoas");
// $total_usuarios = $usuarios->rowCount();

// echo "<p>Total de usuários: $total_usuarios</p>";

// é recomendável, quando receber algum valor através do usuário, preparar a execução da instrução
$nome            = $_GET['nome'];
$data_nascimento = $_GET['nascimento'];
$email           = $_GET['email'];
$pais            = $_GET['pais'];


$inserir_pessoa = $pdo->prepare("INSERT INTO pessoas (nome, data_nascimento, email, pais) VALUES (:nome, :data_nascimento, :email, :pais)");

$inserir_pessoa->bindValue(':nome', $nome);
$inserir_pessoa->bindValue(':data_nascimento', $data_nascimento);
$inserir_pessoa->bindValue(':email', $email);
$inserir_pessoa->bindValue(':pais', $pais);

$inserido = $inserir_pessoa->execute();

if ($inserido) {
    echo "<p>Usuário inserido com sucesso!</p>";
} else {
    echo "<p>Houve algum erro na inserção do registro.</p>";
}
