<?php

namespace app\models;

use app\models\Connection;
use app\traits\PersistDB;

abstract class Model
{
    protected $connection;

    use PersistDB;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    public function all()
    {
        # $sql = "SELECT * FROM {$this->table}";
        $sql = "SELECT * FROM {$this->table}";
        # ao usar o método prepare prepara a $sql para utilizar placeholders, tal como,
        # $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        # outra vantagem do prepare é prevenir ataques do tipo sql injection
        $list = $this->connection->prepare($sql);
        $list->bindValue(':id', 1);
        # posteriormente especificar o valor de :id com o método bindValue
        # $list->bindValue(:id, valor);

        # ao utilizar o método query não é possível a utilização de placeholders
        # $sql = "SELECT * FROM {$this->table}";
        # $list = $this->connection->query($sql);
        $list->execute();

        # utiliza-se prepare quando for trabalhar com dados do formulário ou na consulta
        # existir a cláusula where. E utiliza-se query quando não for necessária
        # essas substituições

        # dd($this->connection); # retorna um objeto do tipo pdo
        # dd($list); # retorna um objeto PDOStatement com a query string

        # fetchAll retorna todas as linhas da pesquisa em um array de objetos enquanto que fetch
        # retorna apenas um resultado $list->fetch(), objeto stdClass
        # return $list->fetchAll();
        return $list->fetch();
    }

    public function find($field, $value)
    {
        # a diferença entre placeholder nomeado como :id e o ? é que no primeiro,
        # no método bindValue, se especifica o seu valor dessa forma $list->bindValue(':id', valor);
        # já com o ?, no bindValue, se especifica através da contagem de posição numérica

        # exemplo 1
        # $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";
        # $list = $this->connection->prepare($sql);
        # $list->bindValue(1, $value);

        # exemplo 2
        # $sql = "SELECT * FROM {$this->table} WHERE {$field} = ? and name = ?";
        # $list = $this->connection->prepare($sql);
        # $list->bindValue(1, $value); # primeira ?
        # $list->bindValue(2, 'Marcos'); # segunda ?

        $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";

        $list = $this->connection->prepare($sql);

        # o método bindParam espera os valores fornecidos pelo parâmetros do método
        # ao invés dos placeholders especificados na string de consulta

        # a princípio recomenda-se utilizar o bindValue para executar consultas ao bd

        $list->bindValue(1, $value);

        # o método execute pode atuar como atalho para o bindValue ao passar os valores
        # como argumento na chamada da função
        # $list->execute(['id' => 4]); ou $list->execute($parameters);
        # no segundo caso o argumento precisa ser um array
        $list->execute();

        return $list->fetch();
    }

    public function delete() 
    {
        $sql = "DELETE FROM {$this->table} WHERE {$field} = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
