<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de empresas</title>
</head>
<body>
    <h1>Listado de empresas</h1>
    <a href="{{ route('company.create') }}">Crear empresa</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>CIF</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email de contacto</th>
                <th>Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->cif }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->tlf }}</td>
                    <td>{{ $company->contact_email }}</td>
                    <td><a href="{{ route('company.show', $company->id) }}">Ver detalles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
