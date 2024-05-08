<?php

namespace Php\Projetop1\Controllers;

use Php\Projetop1\Models\DAO\TurmaDAO;
use Php\Projetop1\Models\Domain\Turma;

class TurmaController
{
  public function index($params)
  {
    $turmaDAO = new TurmaDAO();
    $resultado = $turmaDAO->consultar();
    $acao = $params[1] ?? "";
    $status = $params[2] ?? "";
    if ($acao == "inserir" && $status == "true")
      $mensagem = "Registro inserido com sucesso!";
    elseif ($acao == "inserir" && $status == "false")
      $mensagem = "Erro ao inserir!";
    elseif ($acao == "alterar" && $status == "true")
      $mensagem = "Registro alterado com sucesso!";
    elseif ($acao == "alterar" && $status == "false")
      $mensagem = "Erro ao alterar!";
    elseif ($acao == "excluir" && $status == "true")
      $mensagem = "Registro excluido com sucesso!";
    elseif ($acao == "excluir" && $status == "false")
      $mensagem = "Erro ao excluir!";
    else
      $mensagem = "";
    require_once ("../src/views/turma/turma.php");
  }

  public function inserir($params)
  {
    require_once ("../src/views/turma/turmaInsert.php");
  }

  public function novo($params)
  {
    $turma = new Turma(0, $_POST['idCurso'], $_POST['numeroTurma'], $_POST['dataInicio'], $_POST['dataFim']);
    $turmaDAO = new TurmaDAO();
    if ($turmaDAO->inserir($turma)) {
      header("location: /turma/inserir/true");
    } else {
      header("location: /turma/inserir/false");
    }
  }

  public function alterar($params)
    {
        $turmaDAO = new TurmaDAO();
        $resultado = $turmaDAO->consultarID($params[1]);
        require_once ("../src/views/turma/turmaAlter.php");
    }

    public function excluir($params)
    {
        $turmaDAO = new TurmaDAO();
        $resultado = $turmaDAO->consultarID($params[1]);
        require_once ("../src/views/turma/turmaExcluir.php");
    }

    public function editar($params)
    {
        $turma = new Turma($_POST['idTurma'], $_POST['idCurso'], $_POST['numeroTurma'], $_POST['dataInicio'], $_POST['dataFim']);
        $turmaDAO = new TurmaDAO();
        if ($turmaDAO->alterar($turma)) {
            header('location: /turma/alterar/true');
        } else {
            header('location: /turma/alterar/false');
        }
    }

    public function deletar($params){
        $turmaDAO = new TurmaDAO(); 
        if ($turmaDAO->excluir($_POST['idTurma'])){
            header('location: /turma/excluir/true');
        } else {
            header('location: /turma/excluir/false');
        }
    }

}