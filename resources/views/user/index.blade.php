<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Usuarios</title>
</head>

<body>
    <h1>Listado Usuarios</h1>
    <a href="{{ route('user.create') }}">Crear Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Empresa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname1 }}</td>
                    <td>{{ $user->surname2 }}</td>
                    <td>{{ $user->tlf }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('company.indexFiltrado', $user->id) }}"> Empresas</a>
                    </td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
