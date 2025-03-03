<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificación Usuario</title>
</head>

<body>
    <h1>Modificación Usuario</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <br>

        <label for="surname1">Apellido 1</label>
        <input type="text" name="surname1" value="{{ $user->surname1 }}" required>

        <br>

        <label for="surname2">Apellido 2</label>
        <input type="text" name="surname2" value="{{ $user->surname2 }}">

        <br>

        <label for="tlf">Teléfono</label>
        <input type="text" name="tlf" value="{{ $user->tlf }}">

        <br>

        <label for="email">Email</label>
        <input type="text" name="email" value="{{ $user->email }}" required>

        <br>

        <button type="submit">Modificar</button>
    </form>
    <a href="{{ route('user.index') }}">Volver al listado</a>
</body>

</html>
