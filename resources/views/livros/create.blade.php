<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Livro</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Livro</h1>

            <form method="POST" action="{{ route('livros.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Autor</label>
                    <input type="text" name="autor" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Editora </label>
                    <input type="text" name="editora" class="form-control">
                </div>

                <div class="mb-3">
                    <label> Data de publicação </label>
                    <input type="number" name="data" class="form-control">
                </div>

                <div>
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>