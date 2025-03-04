<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Empresas del Usuario</title>
</head>
<body>
    <h1>Listado de Empresas del Usuario</h1>

    <a href="{{ route('user.addCompanyToUser') }}">Añadir Empresa al usuario {{ $user->name }}</a>

    <ul>
        @foreach ($user->companies as $company)
            <a href="{{ route('company.show', $company->id) }}"><li>{{ $company->name }} - {{$company->cif}} - {{ $company->address }} - {{ $company->tlf }} - {{ $company->contact_email }}</li></a>
        @endforeach

    </ul>
</body>
</html>
