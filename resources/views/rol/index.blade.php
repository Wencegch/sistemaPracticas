<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Roles</title>
</head>
<body>
    <h1>Listado de Roles</h1>
    <a href="{{ route('dashboard') }}">Volver a Dashboard</a>
    <br>
    <a href="{{ route('rol.create') }}">Crear nuevo rol</a>
<<<<<<< HEAD
    
=======

>>>>>>> f47b836a574385b55b29b12991f0097cbc9876e6
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rols as $rol)
                <tr>
                    <td><a href="{{ route('rol.show', $rol) }}">{{ $rol->name }}</a></td>
                    <td>{{ $rol->description }}</td>
                    <td>
                        <a href="{{ route('rol.edit', $rol) }}">Editar</a>
                        <form action="{{ route('rol.destroy', $rol) }}" method="POST" style="display:inline;">
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
