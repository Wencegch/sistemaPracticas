<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación de Empresa</title>
</head>
<body>
    <h1>Creación de Empresa</h1>
    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" required>

        <label for="cif">CIF</label>
        <input type="text" name="cif" required>

        <label for="address">Dirección</label>
        <input type="text" name="address">

        <label for="tlf">Teléfono</label>
        <input type="text" name="tlf">

        <label for="contact_email">Email</label>
        <input type="text" name="contact_email">

        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('company.index') }}">Volver al listado</a>
</body>
</html>
