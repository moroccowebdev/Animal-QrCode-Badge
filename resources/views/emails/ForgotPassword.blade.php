
<h1>Hello Mr.{{$user->lastname}}</h1>

<p>
    We heard that you lost your GitHub password. Sorry about that! <br>
    But don't worry! You can use the following button to reset your password: <br>
    <a href="{{route('Change_view', $user)}}" class="btn btn-success">Reset You Password</a> <br>
    If you don’t use this link within 3 hours, it will expire. To get a new password reset link,
    visit: https://localhost:8000/password_reset
    Thanks 
</p>