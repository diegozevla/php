<?php

use MeuProjeto\Connection;

require_once 'Connection.php';

$pdo = (new Connection)->getConnection();

$taxa_visita = 0; //$_POST['taxa_visita'];
$observacao = 'Lorem ipsum dolor'; // $_POST['observacao'];
$data_atualizacao = null;
$disponivel_para_tecnico = 0;
$tecnico_id = 1;
$cliente_id = 1;

$sql = "INSERT INTO Chamado (taxa_visita, data_atualizacao, observacao, ";
$sql .= "tecnico_id, cliente_id, disponivel_para_tecnico) VALUES (:taxa_visita, :data_atualizacao,";
$sql .= ":observacao, :tecnico_id, :cliente_id, :disponivel_para_tecnico)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':taxa_visita', $taxa_visita);
$stmt->bindValue(':data_atualizacao', $data_atualizacao);
$stmt->bindValue(':observacao', $observacao);
$stmt->bindValue(':tecnico_id', $tecnico_id);
$stmt->bindValue(':cliente_id', $cliente_id);
$stmt->bindValue(':disponivel_para_tecnico', $disponivel_para_tecnico);

$inserido = $stmt->execute();

if ($inserido) {
    echo('Registro inserido.');
} else {
    echo('Registro não inserido.');
}


?>

