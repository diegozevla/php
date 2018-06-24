<?php

;?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and
        media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via
        file:// -->
        <!--[if lt IE 9]>
        <script
            src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script
            src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Cadastrar Usuário</h1>

                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <legend>Cadastrar Usuário</legend>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nome">
                            </div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend>Selecione um gênero</legend>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genero[]" id="homem" value="Homem" checked="checked">
                                        Homem
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genero[]" id="Mulher" value="Mulher">
                                        Mulher
                                    </label>
                                </div>
                            </fieldset>
                            
                        </div>
                        </div>
                        
                    </div>
                                    
                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>


            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
