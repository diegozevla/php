<?php

// O nome é devido ao fato de salvar ou atualizar os dados na tabela
// persistindo a informação

namespace app\traits;

use app\models\querybuilder\Insert;

trait PersistDB
{

    public function insert($attributes) {

        $sql = (new Insert)->sql($this->table, $attributes);
        //dd($sql);
        $insert = $this->connection->prepare($sql);
        return $insert->execute($attributes);

    }

    public function update() {

    }

}
