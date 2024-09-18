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

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <a href="{{ route('Product.index') }}" class="btn btn-warning">
        regresar
    </a>

    <div class="container">
        <form action=" /" enctype="multipart/form-data" method="POST">
            @csrf
            <div>

                <div>
                    <input type="file" class=" form-control" name="file_marca">

                </div>


                <button class="btn btn-primary" type="submit"> Guardar</button>

            </div>
        </form>



    </div>


    <h1>Lista de marcas</h1>


    <table class="  table table-hover table-striped">

        <thead>
            <tr>
                <th>
                    Codigo

                </th>
                <th>
                    Name
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($marcas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach

        </tbody>
        {{-- <div>
            {{ $marcas->links() }}

        </div> --}}
    </table>



</body>

</html>
<div>
