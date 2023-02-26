<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Add Animal</title>
    <link rel="stylesheet" href="{{asset('css/animal.css')}}">
</head>
<body>
    <div class="container">
        <form action="{{route('create-animal')}}" method="post" class="card" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="qr_id" class="form-label">qr_id:</label>
                <input type="text" class="form-control" value="{{$id}}" name="qr_id" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="full name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="Tel" class="form-label">Tel:</label>
                <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="Proflie" class="form-label">Proflie:</label>
                <input type="file" class="form-control" id="profile" placeholder="Profile" name="profile">
            </div>
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="animal-name" class="form-label">Animal Name:</label>
                <input type="text" class="form-control" id="animal-name" placeholder="full name" name="animal">
            </div>
            <div class="mb-3 mt-3">
                <label for="Adress" class="form-label">Adress:</label>
                <input type="text" class="form-control" id="Adress" placeholder="Adress" name="adress">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Confirm password" name="cpassword">
                <div>
                    <p class="text-danger">{{Session::get('error')}}</p>
                </div>
              </div>
            <button type="submit" class="btn btn-dark">Valider</button>
          </form> 
    </div>
</body>
</html>