<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <title>Exibir Estados</title>
</head>
<body>
    
</body>
</html>

<?php
//echo phpinfo();
//die();

define('DS', DIRECTORY_SEPARATOR);
require_once __DIR__ .DS. '..' .DS. 'bootstrap.php';

// instancia o pdo
$pdo = new PDO("{$config['driver']}:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}", $config['user'], $config['pass']);

// define a tabela de propriedades

// dispara uma exceção 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// converte os resultados em um objeto
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// define a consulta
$query = "SELECT * FROM estados";

$data = $pdo->prepare($query);
$data->execute();

$result = $data->fetchAll();

dd($result);
?>

<div class="container">
    <h1>Estados do Brasil</h1>

    <label for="Estados">Estados</label>
    <select name="" id="">
        <?php foreach ($result as $value): ?>
            <option value=""><?php echo $value->name ?></option> 
        <?php endforeach ?>
    </select>
</div>
