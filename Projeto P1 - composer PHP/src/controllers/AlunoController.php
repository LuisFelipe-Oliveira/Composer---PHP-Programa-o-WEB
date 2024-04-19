<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\AlunoDAO;
use Php\Projetop1\Models\Domain\Aluno;

class AlunoController
{
    public function inserir($params)
    {
        require_once ("../src/views/aluno/alunoInsert.php");
    }

    public function novo($params)
    {
        $aluno = new Aluno(0, $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['id_turma']);
        $alunoDAO = new AlunoDAO();
        if ($alunoDAO->inserir($aluno)) {
            return "Inserido com sucesso!";
  
        } else {
          return "Erro ao inserir!";
        }
    }

}