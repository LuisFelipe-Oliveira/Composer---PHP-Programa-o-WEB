<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Professor;

class ProfessorDAO{

private Connection $connection;

    public function __construct(){
        $this->connection = new Connection();
    }

    public function inserir(Professor $professor){
        try{
            $sql = "INSERT INTO professor (nome, telefone, email, idTurma) VALUES (:nome, :telefone, :email, :idTurma)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $professor->getNome());  
            $p->bindValue(":telefone", $professor->getTelefone());
            $p->bindValue(":email", $professor->getEmail());
            $p->bindValue(":idTurma", $professor->getIdTurma());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM professor";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarTurma(){
      try{
          $sql = "SELECT professor.*, turma.idTurma FROM professor INNER JOIN turma ON professor.idTurma = turma.idTurma";
          return $this->connection->getConnection()->query($sql);
      } catch (\Exception $e){
          return 0;
      }
  }


}