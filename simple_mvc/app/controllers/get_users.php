<?php

use app\models\User;

$users = new User;

//dd($users->getAllData());
dd($users->findRecord('id', 3));