<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Inserir Professor</title>
</head>

<body>
  <main class="container">
    <h1>Inserir Professor</h1>
    <form action="/professor/novo" method="post">
      <div class="row">
        <div class="col-8 mt-4">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="col-8 mt-4">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="text" name="telefone" class="form-control" required>
        </div>
        <div class="col-8 mt-4">
          <label for="email" class="form-label">Email:</label>
          <input type="text" name="email" class="form-control" required>
        </div>
        <div class="col-8 mt-4">
          <label for="id_turma" class="form-label">ID da turma:</label>
          <input type="number" name="id_turma" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="submit" class="mt-4 btn btn-success ">Inserir</button>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>