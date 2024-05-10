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

    public function consultar(){
        try{
            $sql = "SELECT * FROM curso";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarID($idCurso){
        try{
            $sql = "SELECT * FROM curso WHERE idCurso = :idCurso";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idCurso", $idCurso);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Curso $curso){
        try{
            $sql = "UPDATE curso SET nome = :nome, descricao = :descricao
                    WHERE idCurso = :idCurso";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $curso->getNome());
            $p->bindValue(":descricao", $curso->getDescricao());
            $p->bindValue(":idCurso", $curso->getIdCurso());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($idCurso){
        try{
            $sql = "DELETE FROM curso WHERE idCurso = :idCurso";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idCurso", $idCurso);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}