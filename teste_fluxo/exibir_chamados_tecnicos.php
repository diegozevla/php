<?php

require_once 'Connection.php';
require_once 'helpers.php';

use MeuProjeto\Connection;

$pdo = (new Connection)->getConnection();

$sql = "SELECT `cliente`.nome, `cliente`.telefone, `cliente`.endereco, `cliente`.complemento, ";
$sql .= "`chamado`.id, `chamado`.data_visita, `chamado`.hora_visita, `chamado`.observacao ";
$sql .= "FROM `cliente`, `chamado` WHERE `chamado`.cliente_id = `cliente`.id ";
$sql .= "AND `chamado`.disponivel_para_tecnico = 1 ORDER BY `chamado`.id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$chamados = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chamados Técnicos</title>

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
            <h1 class="text-center">Chamados Técnicos</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Data/Hora</th>
                                    <th>Obs. Adm.</th>
                                    <th>Histórico</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($chamados as $chamado): ?>
                                    <?php $telefone_formatado = format_phone($chamado->telefone); ?>
                                    <?php ; ?>
                                    <tr>
                                        <td><?php echo $chamado->nome; ?></td>
                                        <td><?php echo $telefone_formatado[0] ." ". $telefone_formatado[1] ?></td>
                                        <td><?php echo $chamado->endereco .", ". $chamado->complemento; ?></td>
                                        <td><?php echo format_date($chamado->data_visita) ." - ". $chamado->hora_visita; ?></td>
                                        <td><a href="exibir_observacao_chamado_tecnico.php?id_chamado=<?php echo $chamado->id; ?>"><?php echo text_summary($chamado->observacao, 30); ?></a></td>
                                        <td>Abrir</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

