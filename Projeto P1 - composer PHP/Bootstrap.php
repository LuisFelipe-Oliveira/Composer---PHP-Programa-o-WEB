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
  '/aluno',
  'Php\Projetop1\controllers\AlunoController@index'
);

$r->get(
  '/aluno/{acao}/{status}',
  'Php\Projetop1\controllers\AlunoController@index'
);

$r->get(
  '/aluno/alterar/id/{id}',
  'Php\Projetop1\controllers\AlunoController@alterar'
);

$r->post(
  '/aluno/editar',
  'Php\Projetop1\controllers\AlunoController@editar'
);

$r->get(
  '/aluno/excluir/id/{id}',
  'Php\Projetop1\controllers\AlunoController@excluir'
);

$r->post(
  '/aluno/deletar',
  'Php\Projetop1\controllers\AlunoController@deletar'
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
  '/professor',
  'Php\Projetop1\controllers\ProfessorController@index'
);

$r->get(
  '/professor/{acao}/{status}',
  'Php\Projetop1\controllers\ProfessorController@index'
);

$r->get(
  '/professor/alterar/id/{id}',
  'Php\Projetop1\controllers\ProfessorController@alterar'
);

$r->post(
  '/professor/editar',
  'Php\Projetop1\controllers\ProfessorController@editar'
);

$r->get(
  '/professor/excluir/id/{id}',
  'Php\Projetop1\controllers\ProfessorController@excluir'
);

$r->post(
  '/professor/deletar',
  'Php\Projetop1\controllers\ProfessorController@deletar'
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
  '/curso',
  'Php\Projetop1\controllers\CursoController@index'
);

$r->get(
  '/curso/{acao}/{status}',
  'Php\Projetop1\controllers\CursoController@index'
);

$r->get(
  '/curso/alterar/id/{id}',
  'Php\Projetop1\controllers\CursoController@alterar'
);

$r->post(
  '/curso/editar',
  'Php\Projetop1\controllers\CursoController@editar'
);

$r->get(
  '/curso/excluir/id/{id}',
  'Php\Projetop1\controllers\CursoController@excluir'
);

$r->post(
  '/curso/deletar',
  'Php\Projetop1\controllers\CursoController@deletar'
);

$r->get(
  '/turma/inserir',
  'Php\Projetop1\controllers\TurmaController@inserir'
);

$r->post(
  '/turma/novo',
  'Php\Projetop1\controllers\TurmaController@novo'
);

$r->get(
  '/turma',
  'Php\Projetop1\controllers\TurmaController@index'
);

$r->get(
  '/turma/{acao}/{status}',
  'Php\Projetop1\controllers\TurmaController@index'
);

$r->get(
  '/turma/alterar/id/{id}',
  'Php\Projetop1\controllers\TurmaController@alterar'
);

$r->post(
  '/turma/editar',
  'Php\Projetop1\controllers\TurmaController@editar'
);

$r->get(
  '/turma/excluir/id/{id}',
  'Php\Projetop1\controllers\TurmaController@excluir'
);

$r->post(
  '/turma/deletar',
  'Php\Projetop1\controllers\TurmaController@deletar'
);


$resultado = $r->handler();

if (!$resultado) {
  http_response_code(404);
  echo "Página não encontrada!";
  die();
}

if ($resultado instanceof Closure) {
  echo $resultado($r->getParams());
} elseif (is_string($resultado)) {
  $resultado = explode("@", $resultado);
  $controller = new $resultado[0];
  $resultado = $resultado[1];
  echo $controller->$resultado($r->getParams());
}