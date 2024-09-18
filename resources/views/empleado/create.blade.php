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



    <div class="container mt-4">

        <div class="card">
            <div class="card-body">
                <form action=" {{ route('Empleado.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">

                            <label for="" class="form-label">name </label>
                            <input type="text" name="name" class="form-control">

                        </div>
                        <div class="col-6">

                            <label for="" class="form-label"> last name </label>
                            <input type="text" name="last_name" class="form-control">

                        </div>

                        <div class="col-6">

                            <label for="" class="form-label">cellphone </label>
                            <input type="text" name="cellphone" class="form-control">

                        </div>
                        <div class="col-6">

                            <label for="" class="form-label">email </label>
                            <input type="text" name="email" class="form-control">

                        </div>
                        <div class="col-6">

                            <label for="" class="form-label">address </label>
                            <input type="text" name="address" class="form-control">

                        </div>
                        <div class="col-6 mt-4">

                            <button type="submit" class="btn btn-success">Enviar</button>

                        </div>

                    </div>


                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
