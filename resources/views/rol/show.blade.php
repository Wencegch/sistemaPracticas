<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Rol</title>
</head>
<body>
    <h1>{{ $rol->name }}</h1>
    <p>Descripción: {{ $rol->description }}</p>
    <a href="{{ route('rol.index') }}">Volver al listado</a>
    <a href="{{ route('rol.edit', $rol) }}">Editar</a>
    <form action="{{ route('rol.destroy', $rol) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
