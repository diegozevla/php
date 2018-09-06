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
                    <legend>Cadastrar Usuário</legend>
                    
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-xs-12 col-sm-12">
                    <div class="radio">
                        <label>
                            <input type="radio" name="" id="input${1/(\w+)/\u\1/g}" value="" checked="checked">
                            Radio Box
                        </label>
                    </div>
                    
                    <div class="radio">
                        <label>
                            <input type="radio" name="" id="input${1/(\w+)/\u\1/g}" value="" checked="checked">
                            Radio Box
                        </label>
                    </div>
                    </div>
                    </div>
                    

                    

                    

                    <div class="row">
                    <label for="input-id" class="col-sm-2">Estado</label>
                    
                    <select name="" id="input${1/(\w+)/\u\1/g}" class="form-control col-sm-8">
                        <option value="">-- Select One --</option>
                    </select>
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
