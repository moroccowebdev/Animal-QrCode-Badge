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
                <label for="name" class="form-label">Le nom:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter le nom" name="name">
            </div>
            <div class="mb-3 mt-3">

                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

            <div class="mb-3">
                <label for="pwd" class="form-label">Mot de passe:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Confirmer le mot de passe oublié:</label>
                <input type="password" class="form-control" id="password" placeholder="Confirm password" name="cpassword">
                <div>
                    <p class="text-danger">{{Session::get('error')}}</p>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Enregistrer</button>
            <a href="{{route('login')}}">Avez-vous un compte?</a>
        </form>
    </div>
</body>
</html>
