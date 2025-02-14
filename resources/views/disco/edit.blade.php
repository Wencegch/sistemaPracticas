<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificaión disco</title>
</head>
<body>
    <h1>Modificación disco</h1>
    <form action="{{ route('disk.update', $disco->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ $disco->name }}">

        <label for="artist">Artista</label>
        <input type="text" name="artist" value="{{ $disco->artist }}">

        <label for="year">Año</label>
        <input type="text" name="year" value="{{ $disco->year }}">

        <label for="genre">Género</label>
        <input type="text" name="genre" value="{{ $disco->genre }}">

        <button type="submit">Modificar</button>
    </form>

    <a href="{{ route('disk.index') }}">Volver al listado</a>
</body>
</html>
