<?php

$has_post = false;
$form_error = false;
$name_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $has_post = true;
    if ($_POST['name'] === '') {
        $form_error = true;
        $name_error = "Nome muito curto ou inválido.";
    }


}



