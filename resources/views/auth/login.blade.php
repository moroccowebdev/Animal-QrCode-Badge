<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container ">
        @if (Session::has('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{Session::get('success')}}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        @endif
        @if (Session::has('error'))
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{Session::get('error')}}',
                })
            </script>
        @endif
        
        <form action="{{route('signin')}}" class="card " method="post">
            <a href="/">
                <img src="{{asset('images/logo.jpg')}}" class="logo" alt="LOGO">
            </a>
            @csrf
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-dark">Login</button>
            <a href="{{route('register')}}">Create Account?</a>
            <a href="{{route('password_reset')}}">Forgot Password?</a>
            </form> 
    </div>
</body>
</html>