<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\TurmaDAO;
use Php\Projetop1\Models\Domain\Turma;



class TurmaController
{
  public function inserir($params)
  {
    require_once ("../src/views/turma/turmaInsert.php");
  }

  public function novo($params)
  {
    $turma = new Turma(0, $_POST['id_curso'], $_POST['numeroTurma'], $_POST['dataInicio'], $_POST['dataFim']);
    $turmaDAO = new TurmaDAO();
    if ($turmaDAO->inserir($turma)) {
      return "Inserido com sucesso!";
    } else {
      return "Erro ao inserir!";
    }
  }

}