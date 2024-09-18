<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-slate-900">

</body>

<div class="container">

    <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="inport_file" />
        <button type="submit">Importar</button>
    </form>

</div>

</html>
