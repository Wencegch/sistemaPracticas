<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de discos</title>
</head>
<body>
    <h1>Listado de discos</h1>
    <a href="{{ route('disk.create') }}">Crear disco</a>
    <ul>
        @foreach ($discos as $disco)
            <a href="{{ route('disk.show', $disco->id) }}"><li>{{ $disco->name }} - {{ $disco->artist }}</li></a>
        @endforeach

    </ul>
</body>
</html>
