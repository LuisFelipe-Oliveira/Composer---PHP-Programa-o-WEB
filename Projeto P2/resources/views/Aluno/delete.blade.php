<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Deletar Aluno</title>
  </head>
  <body>
    <main class="container">
        <h1 class="text-center mt-5">Deletar Aluno</h1>
        <form action="{{route('alunos.destroy', $aluno->id) }}" method="POST">
        @CSRF
        @method('DELETE')
            <div class="row justify-content-center align-items-center">
                <div class="col-8 mt-4">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{ $aluno->nome }}" disabled>
                </div>
                <div class="col-8 mt-4">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="text" name="email" class="form-control" value="{{ $aluno->email }}" disabled>
                </div>
                <div class="col-8 mt-4">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $aluno->telefone }}" disabled>
                </div>
                <div class="col-8 mt-4">
                    <label for="dataNascimento" class="form-label">Data nascimento:</label>
                    <input type="date" id="dataNascimento" name="dataNascimento" class="form-control" value="{{ $aluno->dataNascimento }}" disabled>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-1 mt-4">
                    <button type="submit" class="mt-4 btn btn-danger ">Excluir</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>