<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>


    <a href="{{ route('Empleado.create') }}" class="btn btn-primary">

        Create empleado
    </a>



    <div class="container">

        <table class="table table-hover table-striped">

            <thead>
                <tr>
                    <th>name</th>
                    <th>last_name</th>
                    <th>cellphone</th>
                    <th>email</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($empleados as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>
                            @if ($item->telefono && $item->telefono->count() > 0)
                                @foreach ($item->telefono as $telefono)
                                    {{ $telefono->cellphone }}<br>
                                @endforeach
                            @else
                                Sin teléfono
                            @endif
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->direcciones }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
