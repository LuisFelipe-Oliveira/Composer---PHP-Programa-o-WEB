<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Professor;

class ProfessorDAO
{

    private Connection $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function inserir(Professor $professor)
    {
        try {
            $sql = "INSERT INTO professor (nome, telefone, email, idTurma) VALUES (:nome, :telefone, :email, :idTurma)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $professor->getNome());
            $p->bindValue(":telefone", $professor->getTelefone());
            $p->bindValue(":email", $professor->getEmail());
            $p->bindValue(":idTurma", $professor->getIdTurma());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar()
    {
        try {
            $sql = "SELECT * FROM professor";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultarID($idProfessor)
    {
        try {
            $sql = "SELECT * FROM professor WHERE idProfessor = :idProfessor";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idProfessor", $idProfessor);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultarTurma()
    {
        try {
            $sql = "SELECT professor.*, turma.idTurma FROM professor INNER JOIN turma ON professor.idTurma = turma.idTurma";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function alterar(Professor $professor)
    {
        try {
            $sql = "UPDATE professor SET nome = :nome, telefone = :telefone, email = :email, idTurma = :idTurma
                    WHERE idProfessor = :idProfessor";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":nome", $professor->getNome());
            $p->bindValue(":telefone", $professor->getTelefone());
            $p->bindValue(":email", $professor->getEmail());
            $p->bindValue(":idTurma", $professor->getIdTurma());
            $p->bindValue(":idProfessor", $professor->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir($idProfessor)
    {
        try {
            $sql = "DELETE FROM professor WHERE idProfessor = :idProfessor";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idProfessor", $idProfessor);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

}