<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación de Disco</title>
</head>
<body>
    <h1>Creación de disco</h1>
    <form action="{{ route('disk.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name">

        <label for="artist">Artista</label>
        <input type="text" name="artist">

        <label for="year">Año</label>
        <input type="text" name="year">

        <label for="genre">Género</label>
        <input type="text" name="genre">

        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('disk.index') }}">Volver al listado</a>
</body>
</html>
