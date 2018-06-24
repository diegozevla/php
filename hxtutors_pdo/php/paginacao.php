<?php

use MeuProjeto\Connection;

require_once 'bootstrap.php';
require_once 'Connection.php';

$itens_por_pagina = 10; // especifica o total de itens por página
$pagina_atual = intval($_GET['pagina']);

$connection = new Connection;
$pdo = $connection->getConnection();

// instrução com paginação
$sql = "SELECT * FROM Pessoas LIMIT $pagina_atual, $itens_por_pagina";

$stmt = $pdo->prepare($sql);
$stmt->execute() or die('Erro ao buscar dados.');

// retorna os registros
$pessoas = $stmt->fetchAll();

// verifica quantos registros a tabela possui
$stmt = $pdo->prepare("SELECT id FROM Pessoas");
$stmt->execute();

$total_de_registros = $stmt->rowCount();
$numero_de_paginas = ceil($total_de_registros / $itens_por_pagina);

?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paginação de resultados</title>

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
                <div class="col-md-12">
                    <h1 class="text-center">Paginação de resultados</h1>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Data de nascimento</th>
                                    <th>E-mail</th>
                                    <th>País</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pessoas as $pessoa): ?>
                                    <tr>
                                        <td><?php echo $pessoa->id; ?></td>
                                        <td><?php echo $pessoa->nome; ?></td>
                                        <td><?php echo $pessoa->data_nascimento; ?></td>
                                        <td><?php echo $pessoa->email; ?></td>
                                        <td><?php echo $pessoa->pais; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination">
                        <li><a href="paginacao.php?pagina=0">&laquo;</a></li>
                        <?php for ($i=1; $i < $numero_de_paginas; $i++): ?>
                            <li><a href="paginacao.php?pagina=<?php echo ($i * $itens_por_pagina); ?>"><?php echo ($i); ?></a></li>
                        <?php endfor; ?>
                        <li><a href="paginacao.php?pagina=<?php echo ($numero_de_paginas - 1); ?>">&raquo;</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
