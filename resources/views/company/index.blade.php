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
    <ul>
        @foreach ($companies as $company)
            <a href="{{ route('company.show', $company->cif) }}"><li>{{ $company->name }} - {{ $company->address }} - {{ $company->tlf }} - {{ $company->contact_email }}</li></a>
        @endforeach

    </ul>
</body>
</html>
