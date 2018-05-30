<?php

namespace app\controllers;

use app\models\User;
use app\models\Database as Db;

$users = Db::findRecord('name', 'Mari');

dd($users);