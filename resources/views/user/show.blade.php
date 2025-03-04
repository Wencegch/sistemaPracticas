<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Usuario</title>
</head>
<body>
    <h1>Detalles de Usuario</h1>
    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Empresas:</p>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>CIF</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email contacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->cif }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->tlf }}</td>
                    <td>{{ $company->contact_email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('user.index') }}">Volver al listado</a>
    <a href="{{ route('user.edit', $user->id) }}">Editar</a>
    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
