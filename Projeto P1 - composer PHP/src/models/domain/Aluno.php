<?php

namespace Php\Projetop1\Models\Domain;

class Aluno
{

  private $idAluno;
  private $nome;
  private $telefone;
  private $email;
  private $idTurma;

  public function __construct($idAluno, $nome, $telefone, $email, $idTurma)
  {
    $this->setIdAluno($idAluno);
    $this->setNome($nome);
    $this->setTelefone($telefone);
    $this->setEmail($email);
    $this->setIdTurma($idTurma);
  }

  public function getIdAluno()
  {
    return $this->idAluno;
  }

  public function setIdAluno($idAluno)
  {
    $this->idAluno = $idAluno;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getTelefone()
  {
    return $this->telefone;
  }

  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
  }
  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getIdTurma()
  {
    return $this->idTurma;
  }

  public function setIdTurma($idTurma)
  {
    $this->idTurma = $idTurma;
  }
}