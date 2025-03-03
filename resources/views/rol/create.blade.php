<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación de Rol</title>
</head>
<body>
    <h1>Creación de Rol</h1>
    <form action="{{ route('rol.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" required>

        <br>

        <label for="description">Descripción</label>
        <input type="text" name="description" required>

        <br>

        <button type="submit">Crear</button>
    </form>

    <a href="{{ route('rol.index') }}">Volver al listado</a>
</body>
</html>
