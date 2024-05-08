<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>excluir Turma</title>
</head>

<body>
  <main class="container">
    <h3>excluir Turma</h3>
    <form action="/turma/deletar" method="post">
      <input type="hidden" name="idTurma" value="<?= $resultado['idTurma'] ?>">
      <div class="row">
        <div class="col-6 mt-3">
          <label for="idCurso" class="form-label">ID do curso:</label>
          <input type="text" disabled name="idCurso" class="form-control" value="<?= $resultado['idCurso'] ?>">
        </div>
        <div class="col-6 mt-3">
          <label for="numeroTurma" class="form-label">Número da turma:</label>
          <input type="text" disabled name="numeroTurma" class="form-control" value="<?= $resultado['numeroTurma'] ?>">
        </div>
        <div class="col-6 mt-3">
          <label for="dataInicio" class="form-label">Data de inicio:</label>
          <input type="text" disabled name="dataInicio" class="form-control" value="<?= $resultado['dataInicio'] ?>">
        </div>
        <div class="col-6 mt-3">
          <label for="dataFim" class="form-label">Data final:</label>
          <input type="text" disabled name="dataFim" class="form-control" value="<?= $resultado['dataFim'] ?>">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <p>Você realmente deseja excluir esse registro de turma?</p>
          <button type="submit" class="btn btn-danger">
            Excluir
          </button>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>