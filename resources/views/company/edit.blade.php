<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificación Empresa</title>
</head>

<body>

    <h1>Modificación Empresa</h1>
    <form action="{{ route('company.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ $company->name }}" required>

        <label for="cif">CIF</label>
        <input type="text" name="cif" value="{{ $company->cif }}" required>

        <label for="address">Dirección</label>
        <input type="text" name="address" value="{{ $company->address }}">

        <label for="tlf">Teléfono</label>
        <input type="text" name="tlf" value="{{ $company->tlf }}">

        <label for="contact_email">Email</label>
        <input type="text" name="contact_email" value="{{ $company->contact_email }}">

        <button type="submit">Modificar</button>
    </form>
    <a href="{{ route('company.index') }}">Volver al listado</a>

</body>

</html>
