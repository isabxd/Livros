<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Livro #{{ $livro->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Livro {{ $livro->id }}</h1>

            <form method="POST" action="{{ route('livros.update', $livro->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo}}">
                </div>

                <div class="mb-3">
                    <label>Autor</label>
                    <input type="text" name="autor" class="form-control" value="{{ $livro->autor}}">
                </div>

                <div class="mb-3">
                    <label>Editora</label>
                    <input type="text" name="editora" class="form-control" value="{{ $livro->editora}}">
                </div>

                <div class="mb-3">
                    <label>Data de publicação</label>
                    <input type="number" name="data" class="form-control" value="{{ $livro->data }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>