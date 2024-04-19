<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\ProfessorDAO;
use Php\Projetop1\Models\Domain\Professor;



class ProfessorController
{
    public function inserir($params)
    {
        require_once ("../src/views/professor/professorInsert.php");
    }

    public function novo($params)
    {
        $professor = new Professor(0, $_POST['nome'], $_POST['telefone'],$_POST['email'], $_POST['id_turma'],);
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->inserir($professor)) {
            return "Inserido com sucesso!";

        } else {
            return "Erro ao inserir!";
        }
    }

}