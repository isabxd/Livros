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
            <h1>{{ $livro->titulo }} </h1>
            <h2>{{ $livro->autor}}</h2>
            <h3>{{ $livro->editora }}</h3>
            <h4>{{ $livro->data }}</h4>

            <a class="btn btn-light" href="{{ route('livros.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('livros.edit', $livro->id) }}">Editar</a>

            <form method="POST" action="{{ route('livros.destroy', $livro->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>