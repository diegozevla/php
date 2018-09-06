<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abertura de chamado</title>

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
                    <h1 class="text-center">Abertura de chamado</h1>

                    <form action="inserir_chamado.php" method="POST" role="form">
                        <legend>Abertura de chamado</legend>


                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="data_visita" class="control-label">Data da visita:</label>
                                    <input type="date" name="data_visita" id="data_visita" class="form-control" value="" required="required" title="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="taxa_visita" class="control-label">Taxa da visita:</label>
                                    <input type="number" name="taxa_visita" id="taxa_visita" class="form-control" min="1" step="any" required="required" title="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="observacao" class="control-label">Observação:</label>
                                    <textarea name="observacao" id="observacao" class="form-control" rows="3" required="required"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="visualizar" class="control-label">O que será enviado:</label>
                                    <p class="form-control-static" id="preview">
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-sm-offset-6 col-md-3 col-md-offset-2">
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 submit">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <style>


            /* Extra Small Devices, Phones */
            @media only screen and (min-width : 480px) {
                .submit {
                    margin-top: 10px;
                }
            }

            /* Extra Small Devices, Phones */
            @media only screen and (min-width : 768px) {
                .submit {
                    margin-top: 0;
                }
            }

        </style>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script>
            $(document).ready(function () {

                var previsao_texto = "Prezado cliente. <br> Este é um e-mail automático para lhe avisar sobre uma visita técnica agendada para o dia [DATA_VISITA]. O valor da visita será de [TAXA_VISITA]. <br> Grato pela preferência.";

                var equivale_data_valida = function(dia, mes, ano) {

                    if (parseInt(dia) > 0 && parseInt(dia) < 32) {
                        if (parseInt(mes) > 0 && parseInt(mes) < 13) {
                            if (parseInt(ano) >= 1900 && parseInt(ano) <= (new Date()).getFullYear() + 1) {
                                return true;
                            }
                        }
                    }

                    return false;
                }; // end equivale_data_valida

                var equivale_valor_valido = function(valor) {
                    if (parseFloat(valor) >= 0) {
                        return true;
                    }

                    return false;
                };

                $("#data_visita").change(function() {
                    var data = $("#data_visita").val().split("-");
                    var dia = data[2];
                    var mes = data[1];
                    var ano = data[0];

                    if (equivale_data_valida(dia, mes, ano)) {
                        previsao_texto_novo = previsao_texto.replace("[DATA_VISITA]", dia +"/"+ mes +"/"+ ano);
                        $('#preview').html(previsao_texto_novo);
                    } else {
                        $('#preview').html(previsao_texto);
                    }
                }); // end $("#data_visita").change

                $("#taxa_visita").change(function() {
                    var taxa_visita = $("#taxa_visita").val();

                    if (equivale_valor_valido(taxa_visita)) {
                        previsao_texto = previsao_texto.replace("[TAXA_VISITA]", taxa_visita);
                        $('#preview').html(previsao_texto);
                    }
                }); // end $("#taxa_visita").change

                $('#preview').html(previsao_texto);
            });
        </script>
    </body>
</html>

