<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir empresa a usuario</title>
</head>

<body>
    //Se llega a esta página desde la vista indexFiltrado.blade.php de la entidad Company y se le pasa el id del usuario
    al que se le quiere añadir una empresa
    <h1>Añadir empresa a usuario</h1>
    <form action="{{ route('company.storeCompanyToUser', $user->id) }}" method="POST">
        @csrf
        <label for="company_id">Empresa</label>
        <select name="company_id" id="company_id">
            @if (count($companies) == 0)
                <option value="">No hay empresas</option>
            @else
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            @endif
        </select>
        <button type="submit">Añadir</button>
</body>

</html>
