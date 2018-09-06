<?php

require_once "Connection.php";
require_once 'helpers.php';

use MeuProjeto\Connection;

$pdo = (new Connection)->getConnection();

$sql = "SELECT `chamado`.data_visita, `chamado`.hora_visita, `chamado`.observacao FROM chamado WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $_GET['id_chamado']);

$stmt->execute();

$registro = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Descrição do chamado</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Observação</h1>
                    <p class="text-info">Observação do chamado no dia <?php echo format_date($registro->data_visita) ." - ". $registro->hora_visita; ?> </p>
                    <p><?php echo $registro->observacao; ?></p>
                    <a class="btn btn-default" href="exibir_chamados_tecnicos.php" role="button">Retornar</a>
                </div>
            </div>
        </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
