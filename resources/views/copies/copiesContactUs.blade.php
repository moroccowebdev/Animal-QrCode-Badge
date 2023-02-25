<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>

    <div class="headPage">
        <div class=" container-fluid title">
            <div class="hedT">
                <h1>Contact Us</h1><br>
                <a href="#contact" class="btn btn-outline-warning">Contact</a>
                <a href="#contact-info" class="btn btn-outline-warning">nfo</a>
            </div>
        </div>
        <div class="wave">
            <img src="{{ asset('images_design/bottom_wave.png') }}" alt="walo">
        </div>
    </div>


    <!-- contact -->

    <section class="contact" id="contact">
        @if(Session::has('sent_message'))
            <div class="alert alert-success">
                {{ Session::get('sent_message') }}
            </div>
        @endif

        <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="inputBox">
                <input type="text" name="firstName" placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
            </div>
            <div class="inputBox">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="number" name="phone" placeholder="Phone Number">
            </div>

            <textarea name="message" id="" cols="30" rows="10" placeholder="meassage"></textarea>

            <input type="submit" value="send message" class="btnF">

        </form>

    </section>
<!---------- end ---------->

{{-- ------ --}}
{{-- ---- --}}
{{-- ------ --}}

{{---------- folow part ----------}}
{{-- -------- --}}
    <div class="contact-info" id="contact-info">
        <div>
            <span><ion-icon class="iconF" name="location"></ion-icon></span>
            <a>Maroc , rabat rue 198 </a>
        </div>
        <div>
            <span><ion-icon class="iconF" name="mail"></ion-icon></span>
            <a href="mailto:example@gmail.com">example@gmail.com</a>
        </div>
        <div>
            <span><ion-icon class="iconF" name="call"></ion-icon></span>
            <a href="tel:+212654322476">+212 6 54 32 24 76</a>
        </div>
        {{-- social media --}}
        <ul>
            <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>

    </div>

{{-- -------- --}}
{{---------- end folow part ----------}}


    </div>
    <div class="desg">
        <div class="testing">
            <img src="{{ asset('images_design/dg10.jpg') }}" alt="">
            <p><b>Kaline</b></p>
        </div>
        <div class="testing">
            <img src="{{ asset('images_design/dog14.jpg') }}" alt="">
            <p>
                <b>Joe</b>

            </p>
        </div>
        <div class="testing">
            <img src="{{ asset('images_design/dg-cute.jpg') }}" alt="">
            <p><b>jack</b></p>
        </div>
    </div>
    <div class="MF">
        <h3>For More Informations</h3>
        <a href="#" class="btnF">About Us</a>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
