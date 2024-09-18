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

<body class="bg-slate-900">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <a href="/" class="btn btn-warning">
        regresar
    </a>
    <div class=" bg-slate-900">




        <nav class="navbar bg-body-tertiary">
            <div class="container">

                <div>
                    <a class="navbar-brand" href="{{ route('Marcas.index') }}">

                        Import Marcas
                    </a>
                </div>
                <div>
                    <a class="navbar-brand" href="{{ route('Product.create') }}">

                        Import Products
                    </a>
                </div>
            </div>
        </nav>



        <table class=" mt-4 table table-hover table-striped">
            <thead>
                <tr>
                    <th>name</th>
                    <th>quantity</th>
                    <th>price</th>
                </tr>

            </thead>
            <tbody>

                @foreach ($products as $item)
                    <tr>

                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->quantity }}
                        </td>
                        <td>
                            {{ $item->price }}
                        </td>
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
