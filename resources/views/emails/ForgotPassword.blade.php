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
    Nous avons appris que tu as perdu ton mot de passe tagtag. Nous en sommes désolés !<br>
    Mais ne vous inquiétez pas ! Vous pouvez utiliser le bouton suivant pour réinitialiser votre mot de passe : 
</p> <br>
    <a href="{{route('Change_view', $user)}}" class="btn">Réinitialiser votre mot de passe</a> <br> <br>
<p>
    Si vous n'utilisez pas ce lien dans les 3 heures, il expirera. Pour obtenir un nouveau lien de réinitialisation du mot de passe, <br>
    visiter : https://localhost:8000/password_reset
    Merci.
</p>