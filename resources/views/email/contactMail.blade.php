<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>

    <h1>Le nom : {{ $details['first-name'] }}</h1>
    <h1>Le prénom : {{ $details['last-name'] }}</h1>
    <h1>Email : {{ $details['email'] }}</h1>
    <h1>téléphone : {{ $details['phone'] }}</h1>
    <h1>Message : {{ $details['message'] }}</h1>

</body>
</html>
