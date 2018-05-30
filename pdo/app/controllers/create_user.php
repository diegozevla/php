<?php

use app\models\User;

$user = new User;
$users = $user->all();
// dd($user->all());
// $userPage = "Luís Fonseca";

$layout->add('create_user');
