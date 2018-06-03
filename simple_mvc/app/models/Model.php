<?php

namespace app\models;

use app\models\Database as Db;

class Model {
    
    public function getAllData()
    {
        return Db::${$this->tableUser};
    }

    public function findRecord($field, $value) {
        
        $users = $this->getAllData();
        $rows_found = array();
    
        // verifico se o campo existe
        if (array_key_exists($field, $users[0])) {
            foreach ($users as $key => $val) {
                if (strtolower($users[$key][$field] === $value)) {
                    array_push($rows_found, $users[$key]);
                }
            }
        }

        return $rows_found;		
        
    }


}