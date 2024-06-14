<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabela alunos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">

  <style>
    .btn-custom-edit:hover {
      background-color: #8a6803;
      border: #8a6803;
      color: #ffffff;
      transition: 0.8s;
    }

    .btn-custom-delete:hover {
      background-color: #6b151e;
      border: #6b151e;
      transition: 0.8s;
    }
  </style>
</head>

<body>
  <main class="container">
    <h1 class="mt-5">Tabela alunos</h1>
    <div class="d-flex mt-3 justify-content-end">
      <a href="{{route('alunos.create')}}" class="d-flex text-center btn-lg btn btn-success">Novo aluno</a>
    </div>
    <br>
    <table class="table table-stripped table-hover" id="tabela">
      <thead>
        <tr>
          <th class="col-1">Id</th>
          <th class="col-2">Nome</th>
          <th class="col-2">email</th>
          <th class="col-2">telefone</th>
          <th class="col-2">data de nascimento</th>
          <th class="col-2">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alunos as $aluno)
          <tr>
            <td>{{ $aluno->id}}</td>
            <td>{{ $aluno->nome}}</td>
            <td>{{ $aluno->telefone}}</td>
            <td>{{ $aluno->email}}</td>
            <td>{{ $aluno->dataNascimento}}</td>
            <td>
              <a href="{{route('alunos.edit', $aluno->id) }}" class="btn btn-warning btn-custom-edit">
                Alterar
              </a>
              <a href="{{route('alunos.delete', $aluno->id) }}" class="btn btn-danger btn-custom-delete">
                Excluir
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>


  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
  <script>
    var table = new DataTable('#tabela', {
      language: {
        url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
      },
    });
  </script>
</body>

</html>