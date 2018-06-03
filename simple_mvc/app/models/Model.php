<?php

namespace app\models;

use app\models\Database as Db;

class Model {
    
    private $table;

    public function __construct() {
        $this->table = Db::${$this->tableName};
    }

    public function getAllData()
    {
        return $table;
    }

    public function findRecord($field, $value) {
        
        $rows_found = array();
    
        // verifico se o campo existe
        if (array_key_exists($field, $this->table[0])) {
            foreach ($this->table as $key => $val) {
                if (strtolower($this->table[$key][$field] === $value)) {
                    array_push($rows_found, $this->table[$key]);
                }
            }
        }

        return $rows_found;		
        
    }


}