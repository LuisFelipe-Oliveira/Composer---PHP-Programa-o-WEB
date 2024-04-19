<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Curso;

class CursoDAO{

private Connection $connection;

    public function __construct(){
        $this->connection = new connection();
    }

    public function inserir(Curso $curso){
        try{
            $sql = "INSERT INTO curso (nome, descricao) VALUES (:nome, :descricao)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $curso->getNome());  
            $p->bindValue(":descricao", $curso->getDescricao());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}