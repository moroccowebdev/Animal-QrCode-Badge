<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="container">
        <form action="{{route('User_store')}}" method="post" class="card p-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="firstname" class="form-label">FirstName:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
            </div>
            <div class="mb-3 mt-3">
                <label for="lastname" class="form-label">lastName:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
            </div>
            <div class="mb-3 mt-3">
                <label for="Tel" class="form-label">Tel:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="Proflie" class="form-label">Proflie:</label>
                <input type="file" class="form-control" class="profile" placeholder="Enter Profile" name="profile">
            </div>
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-dark">Register</button>
            <a href="{{route('login')}}">Do you have an account?</a>
          </form> 
    </div>
</body>
</html>