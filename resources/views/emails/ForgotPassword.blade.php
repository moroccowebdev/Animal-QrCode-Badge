<style>
    .btn {
    text-decoration: none;
    border: 2px solid black;
    border-radius: 15px;
    background-color: green;
    color: white;
    padding: 10px;
    margin: 10px;
    margin-left: 70px;
    }
    p {
        margin: 10px;
    }
</style>
<h1>Mr {{$user->lastname}}</h1>

<p>
    We heard that you lost your tagtag password. Sorry about that! <br>
    But don't worry! You can use the following button to reset your password: 
</p> <br>
    <a href="{{route('Change_view', $user)}}" class="btn">Reset You Password</a> <br> <br>
<p>
    If you don’t use this link within 3 hours, it will expire. To get a new password reset link, <br>
    visit: https://localhost:8000/password_reset
    Thanks 
</p>