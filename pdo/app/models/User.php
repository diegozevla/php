<?php

namespace app\models;

class User extends Model
{
    
    protected $table = 'users';

    // insere um registro na tabela Users
    public function insert(array $attributes) {

        $sql = "INSERT INTO Users (name, email, password) VALUES (:name, :email, :password)";

        $insert = $this->connection->prepare($sql);

        // é possível substituir os valores dos placeholders da $sql dessa forma
        // $insert->bindValue(':name', $attributes['name']);
        // $insert->bindValue(':email', $attributes['email']);
        // $insert->bindValue(':password', $attributes['password']);

        // ou dessa
        foreach ($attributes as $key => $value) {
            $insert->bindValue($key, $value);
        }

        // ou dessa, ao passar o array como argumento
        // return $insert->execute($attributes);
        return $insert->execute();

    }

}
