<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>excluir Professor</title>
</head>

<body>
    <main class="container">
        <h3>excluir Professor</h3>
        <form action="/professor/deletar" method="post">
            <input type="hidden" name="idProfessor" value="<?= $resultado['idProfessor'] ?>">
            <div class="row">
                <div class="col-6 mt-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" disabled name="nome" class="form-control" value="<?=$resultado['nome']?>">
                </div>
                <div class="col-6 mt-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" disabled name="telefone" class="form-control" value="<?=$resultado['telefone']?>">
                </div>
                <div class="col-6 mt-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="text" disabled name="email" class="form-control" value="<?=$resultado['email']?>">
                </div>
                <div class="col-6 mt-3">
                    <label for="idTurma" class="form-label">Id da turma:</label>
                    <input type="text" disabled name="idTurma" class="form-control" value="<?=$resultado['idTurma']?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <p>Você realmente deseja excluir esse registro de professor?</p>
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