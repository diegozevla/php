<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
        include_once 'process_form.php';
        $email_error    = false;
        // $form_error     = false;
        // $send_success   = false;

    ?>
    <div class="container">
        <?php if ($has_post): ?>
            <?php if ($form_error): ?>
                <?php echo '<div class="alert alert-warning" role="alert">'; ?>
                    <?php
                        $str =  'Houve algum problema para enviar a mensagem. ';
                        $str .= 'Clique <a href="' .htmlentities($_SERVER['PHP_SELF']). '#test">aqui</a> para ver o que aconteceu.';
                        $str .= '<span class="float-right"><a href="' .htmlentities($_SERVER['PHP_SELF']). '">Dispensar</a></span>';
                    ?>
                    <?php echo $str; ?>
                <?php echo '</div>'; ?>
            <?php endif; ?>

            <?php if ($form_error === false && $email_error): ?>
                <?php echo '<div class="alert alert-warning" role="alert">'; ?>
                    <?php
                        $str =  'Ops ... Mensagem não enviada. ';
                        $str .= 'Entre em contato pelo email <a href="mailto:contato@inoutlimp.com.br">contato@inoutlimp.com.br</a>.';
                        $str .= '<span class="float-right"><a href="' .htmlentities($_SERVER['PHP_SELF']). '">Dispensar</a></span>';
                    ?>
                    <?php echo $str; ?>
                <?php echo '</div>'; ?>
            <?php endif; ?>


            <?php if ($form_error === false && $email_error  === false): ?>
                <?php echo '<div class="alert alert-success" role="alert">'; ?>
                    <?php
                        $str =  'Sua mensagem foi enviada! ';
                        $str .= '<span class="float-right"><a href="' .htmlentities($_SERVER['PHP_SELF']). '">Dispensar</a></span>';
                    ?>
                    <?php echo $str; ?>
                <?php echo '</div>'; ?>
            <?php endif; ?>
        <?php endif; ?>

        <p>texto normal <span class="float-right">texto direito</span>  </p>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control <?php echo $name_error ? 'is-invalid' : '' ; ?>">
                <div class="invalid-feedback"><?php echo $name_error; ?></div>
            </div>
            <a href="http://localhost/php/test_form/index.php#test">Ir</a>
            <input type="submit" value="Enviar">
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <hr>
            <!-- <a href="<?php // echo $_SERVER['PHP_SELF']; ?>#test">HTML link code generator</a> -->
            <a id="test">HTML link code generator</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <?php $_SESSION['post'] = false; ?>
</body>
</html>
