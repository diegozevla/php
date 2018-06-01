<?php

namespace app\models\querybuilder;

// classe responsável por criar a instrução de inserção
class Insert
{

    // monta a instrução sql e retorna
    public function sql($table, $attributes) {

        $sql = "INSERT INTO {$table} (";
        $sql .= \implode(", ", \array_keys($attributes)) . ') VALUES (';
        $sql .= ':' . \implode(', :', \array_keys($attributes)) . ');';

        return $sql;
    }

}
