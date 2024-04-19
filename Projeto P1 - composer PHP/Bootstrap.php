<?php

require __DIR__ . "/vendor/autoload.php";


$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Projetop1\Router($metodo, $caminho);

$r->get(
  '/aluno/inserir',
  'Php\Projetop1\controllers\AlunoController@inserir'
);

$r->post(
  '/aluno/novo',
  'Php\Projetop1\controllers\AlunoController@novo'
);

$r->get(
  '/professor/inserir',
  'Php\Projetop1\controllers\ProfessorController@inserir'
);

$r->post(
  '/professor/novo',
  'Php\Projetop1\controllers\ProfessorController@novo'
);

$r->get(
  '/curso/inserir',
  'Php\Projetop1\controllers\CursoController@inserir'
);

$r->post(
  '/curso/novo',
  'Php\Projetop1\controllers\CursoController@novo'
);

$r->get(
  '/turma/inserir',
  'Php\Projetop1\controllers\TurmaController@inserir'
);

$r->post(
  '/turma/novo',
  'Php\Projetop1\controllers\TurmaController@novo'
);

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}