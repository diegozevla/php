<?php
    date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Denúncia - VegSol</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulário de denúncias do grupo VegSol</h1>
        <p>Este formulário permite enviar uma denúncia anônima sobre algum ocorrido no grupo. <br><span class="text-primary">Todos os campos, com exceção das imagens, são opcionais. Verifique, no entanto, se o nome do responsável pela ofensa está legível.</span></p>
        <p class="text-info"></p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="userName">Nome</label>
                <input type="text" name="userName" id="userName" class="form-control" placeholder="Seu nome ou apelido.">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Descrição do ocorrido."></textarea>
            </div>
            <div class="form-group">
                <label for="dateTime">Dia e Horário</label>
                <input type="datetime-local" name="dateTime" id="dateTime" class="form-control" placeholder="A identificação é opcional." value="<?php echo date("Y-m-d\TH:i") ?>">
            </div>
            <div class="form-group">
                <label for="offender">Nome do responsável pela ofensa</label>
                <input type="text" name="offender" id="offender" class="form-control" placeholder="Nome do responsável caso não esteja legível na imagem.">
            </div>
            <div class="form-group">
                <input type="file" name="images[]" id="images" accept="image/*" multiple>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>