<?php

namespace Php\Projetop1\Models\DAO;


use Php\Projetop1\Models\Domain\Turma;

class TurmaDAO{

private Connection $connection;

    public function __construct(){
        $this->connection = new connection();
    }

    public function inserir(Turma $turma){
        try{
            $sql = "INSERT INTO turma (idCurso, numeroTurma, dataInicio, dataFim) VALUES (:idCurso, :numeroTurma,:dataInicio, :dataFim)";
            $p = $this->connection->getConnection()->prepare($sql);
            $p->bindValue(":idCurso", $turma->getId_curso());  
            $p->bindValue(":numeroTurma", $turma->getNumeroTurma());  
            $p->bindValue(":dataInicio", $turma->getDataInicio());  
            $p->bindValue(":dataFim", $turma->getDataFIm());  
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}