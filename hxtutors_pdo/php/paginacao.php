<?php

use MeuProjeto\Connection;

require_once 'bootstrap.php';
require_once 'Connection.php';

$pdo = (new Connection)->getConnection();

$stmt = $pdo->prepare("SELECT COUNT(*) FROM Pessoas");
$stmt->execute() ;

$total_de_registros = $stmt->fetchColumn();
$pagina_atual = ! isset($_GET['pagina']) ? 0 : $_GET['pagina'];
$registros_por_pagina = 10;
$total_de_paginas = ceil($total_de_registros / $registros_por_pagina);

$sql = "SELECT * FROM Pessoas LIMIT $pagina_atual, $registros_por_pagina";
$stmt = $pdo->prepare($sql);
$stmt->execute() ;

$pessoas = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paginação com PHP</title>

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
                    <h1 class="text-center">Paginação com PHP</h1>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
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

                        <ul class="pagination">
                            <li><a href="<?php echo $_SERVER["PHP_SELF"]; ?>?pagina=0">&laquo;</a></li>
                            <?php for ($pagina = 1; $pagina < ($total_de_paginas - 1); $pagina++): ?>
                            <li><a href="<?php echo $_SERVER["PHP_SELF"]; ?>?pagina=<?php echo ($pagina * 10); ?>"><?php echo $pagina; ?></a></li>
                            <?php endfor; ?>
                            <li><a href="<?php echo $_SERVER["PHP_SELF"]; ?>?pagina=<?php echo (($total_de_paginas - 1) * $registros_por_pagina); ?>">&raquo;</a></li>
                        </ul>

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
