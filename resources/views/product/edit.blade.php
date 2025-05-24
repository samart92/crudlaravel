<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('products.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="text" name="proName" value="{{ $data->name }}"><br>
        <input type="text" name="price" value="{{ $data->price }}"><br>
        <input type="text" name="quatity" value="{{ $data->quantity }}"><br>

        <div>
            <img src="{{ Storage::url($data->photo) }}" alt="" width="100">
            <input type="file" name="photo">
        </div>
        <button type="submit">update</button>
    </form>

</body>

</html>
