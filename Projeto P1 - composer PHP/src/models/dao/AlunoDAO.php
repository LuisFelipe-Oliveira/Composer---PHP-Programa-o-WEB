<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Aluno;

class AlunoDAO{

private Connection $connection;

    public function __construct(){
        $this->connection = new connection();
    }

    public function inserir(Aluno $aluno){
        try{
            $sql = "INSERT INTO aluno (nome, telefone, email, idTurma) VALUES (:nome, :telefone, :email, :idTurma)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $aluno->getNome());  
            $p->bindValue(":telefone", $aluno->getTelefone());  
            $p->bindValue(":email", $aluno->getEmail());
            $p->bindValue("idTurma", $aluno->getIdTurma());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM aluno";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarTurma(){
        try{
            $sql = "SELECT aluno.*, turma.idTurma FROM aluno INNER JOIN turma ON aluno.idTurma = turma.id";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

}