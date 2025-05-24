<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="proName"><br>
        <input type="text" name="price"><br>
        <input type="text" name="quatity"><br>
        <input type="file" name="poto" id=""><br>
        <button type="submit">Add</button>
    </form>

</body>

</html>
