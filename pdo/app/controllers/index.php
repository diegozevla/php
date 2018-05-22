<?php

use app\models\User;

$user = new User;
dd($user->all());

// havia suposto que o require deveria chamar ../views/index.index.php ao invés da forma abaixo, porém, o script considera a localização a partir do arquivo que chamou este
require "../app/views/index.php";