<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación Usuario</title>
</head>

<body>
    <h1>Creación Usuario</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" required>

        <label for="surname1">Apellido 1</label>
        <input type="text" name="surname1" required>

        <label for="surname2">Apellido 2</label>
        <input type="text" name="surname2">

        <label for="tlf">Teléfono</label>
        <input type="text" name="tlf">

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required>

        <label for="company_id">Empresa</label>
        <select name="company_id" id="company_id">
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>

        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('user.index') }}">Volver al listado</a>
</body>

</html>
