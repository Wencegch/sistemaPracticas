<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Empresa</title>
</head>

<body>

    <h1>{{ $company->name }}</h1>
    <p>CIF: {{ $company->cif }}</p>
    <p>Dirección: {{ $company->address }}</p>
    <p>Teléfono: {{ $company->tlf }}</p>
    <p>Email de contacto: {{ $company->contact_email }}</p>
    <a href="{{ route('company.index') }}">Volver al listado</a>
    <a href="{{ route('company.edit', $company) }}">Editar</a>
    <form action="{{ route('company.destroy', $company) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>

</html>
