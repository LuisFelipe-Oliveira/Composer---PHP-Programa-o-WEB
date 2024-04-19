<?php

namespace Php\Projetop1\Models\Domain;

class Professor{

    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $idTurma;

    public function __construct($id, $nome, $telefone, $email, $idTurma){
        $this->setId($id);
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->setIdTurma($idTurma);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getIdTurma(){
        return $this->idTurma;
    }

    public function setIdTurma($idTurma){
        $this->idTurma = $idTurma;
    }

}   