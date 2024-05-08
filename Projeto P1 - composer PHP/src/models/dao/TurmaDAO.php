<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Turma;

class TurmaDAO
{

    private Connection $connection;

    public function __construct()
    {
        $this->connection = new connection();
    }

    public function inserir(Turma $turma)
    {
        try {
            $sql = "INSERT INTO turma (idCurso, numeroTurma, dataInicio, dataFim) VALUES (:idCurso, :numeroTurma,:dataInicio, :dataFim)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idCurso", $turma->getId_curso());
            $p->bindValue(":numeroTurma", $turma->getNumeroTurma());
            $p->bindValue(":dataInicio", $turma->getDataInicio());
            $p->bindValue(":dataFim", $turma->getDataFIm());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar()
    {
        try {
            $sql = "SELECT * FROM turma";
            return $this->connection->getConnection()->query($sql);
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultarID($idTurma)
    {
        try {
            $sql = "SELECT * FROM turma WHERE idTurma = :idTurma";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idTurma", $idTurma);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function alterar(Turma $turma)
    {
        try {
            $sql = "UPDATE turma SET idCurso = :idCurso, numeroTurma = :numeroTurma, dataInicio = :dataInicio, dataFim = :dataFim
                    WHERE idTurma = :idTurma";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idCurso", $turma->getId_curso());
            $p->bindValue(":numeroTurma", $turma->getNumeroTurma());
            $p->bindValue(":dataInicio", $turma->getDataInicio());
            $p->bindValue(":dataFim", $turma->getDataFim());
            $p->bindValue(":idTurma", $turma->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir($idTurma)
    {
        try {
            $sql = "DELETE FROM turma WHERE idTurma = :idTurma";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idTurma", $idTurma);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }
}