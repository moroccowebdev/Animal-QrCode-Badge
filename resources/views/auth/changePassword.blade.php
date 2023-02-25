<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/change-password.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Change Password</title>
    </head>
<body>
    <div class="container px-5 c">
        <div class="card register">
            <h1 class="text-center text-white text"> <b>Change Password</b> </h1>
            @if (Session::has('error'))
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{Session::get('error')}}',
                })
            </script>
        @endif
            <form action="{{route('Change_Password', $user)}}" method="get">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="password" class="form-label text-white text">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label text-white text">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="confirm password" name="Cpassword">
                </div>
                <button type="submit" class="btn btn-outline-warning ">Change</button>
            </form> 
        </div>
    </div>
</body>
</html>