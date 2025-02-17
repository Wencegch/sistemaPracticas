<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificación de Rol</title>
</head>
<body>
    <h1>Modificación de Rol</h1>
    <form action="{{ route('rol.update', $rol->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ $rol->name }}" required>

        <br>

        <label for="description">Descripción</label>
        <input type="text" name="description" value="{{ $rol->description }}" required>

        <br>

        <button type="submit">Modificar</button>
    </form>

    <a href="{{ route('rol.index') }}">Volver al listado</a>
</body>
</html>
