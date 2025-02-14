<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disco</title>
</head>
<body>
    <h1>{{ $disco->name }}</h1>
    <p>{{ $disco->artist }}</p>
    <p>{{ $disco->year }}</p>
    <p>{{ $disco->genre }}</p>
    <p>{{ $disco->description }}</p>
    <p>{{ $disco->created_at }}</p>
    <p>{{ $disco->updated_at }}</p>
    <a href="{{ route('disk.index') }}">Volver al listado</a>
    <a href="{{ route('disk.edit', $disco) }}">Editar</a>
    <form action="{{ route('disk.destroy', $disco) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
