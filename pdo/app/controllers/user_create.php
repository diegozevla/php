<?php

// o controller é responsável por carregar o model, ou não, que ficará disponível
// para a view. As variáveis instanciadas aqui ficarão disponíveis para os scripts
// incluídos posteriormente.

use app\models\User;

$user = new User;
$users = $user->all();

$layout->add('create_user');
