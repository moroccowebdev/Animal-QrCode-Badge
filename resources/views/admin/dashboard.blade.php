<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <a href="{{ route('admin-users') }}" class="btn btn-primary">Users</a>
    <a href="{{ route('admin-animals') }}" class="btn btn-success">Animals</a>
    {{-- <a href="{{ route('admin-orders') }}" class="btn btn-success">Orders</a> --}}

</body>
</html>
