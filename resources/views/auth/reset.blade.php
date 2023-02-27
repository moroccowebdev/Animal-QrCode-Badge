<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <title>Réinitialiser le mot de passe</title>
</head>
<body>
    <div class="container p-3">
        <h1 class="text-center text"> <b>Reset your password</b></h1>
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
        <div class="card p-5 reset w-75 mx-auto">
            <p>
                Saisissez l'adresse électronique vérifiée de votre compte utilisateur et nous vous enverrons un lien de réinitialisation du mot de passe.
            </p>
            <form action="{{route('reset_password')}}" method="get">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label ">Email:</label>
                    <input type="email" class="form-control input" id="email" placeholder="Entrer email" name="email">
                </div>
                <button type="submit" class="btn btn-dark">Réinitialiser</button>
            </form>
        </div>
    </div>
</body>
</html>