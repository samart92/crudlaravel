<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>index page</h1>
    <a href="{{ url('products/create') }}">create new product</a>
    <!-- route('products.create') -->

    <h2>product list</h2>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>Quantity</td>
            <td>action</td>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->quantity }}</td>
                <td>action</td>
            </tr>
        @endforeach

    </table>
</body>

</html>
