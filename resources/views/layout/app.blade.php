<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tag Tag - @yield('title')</title>

    {{-- BOOTSTRAP CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- SWEATALERT CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('tag-tag.jpg') }}" type="image/x-icon">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('sass/app.css') }}">

</head>
<body>
    <header>
        <nav class="navBar">
            <a href="{{ route('/') }}" class="logo">
                <img src="{{ asset('Group-1.png') }}" alt="logo" />
            </a>
            <ul class="navBar__navList hover">
                <li><a href="{{ route('/') }}">accueil</a></li>
                <li>
                    <a href="{{ route('about') }}">À propos de nous</a>
                </li>

                <li><a href="{{ route('howToUse')  }}">Comment Utiliser</a></li>
                <li><a href="{{ route('contactUs') }}">Contactez-moi</a></li>
                <li><a href="{{ route('productPage') }}">Boutique</a></li>
                {{-- admin dashbord --}}
                @auth
                    @if (Auth::user()->admin === 1)
                        <li class="navBar__navList__child">
                            <a href="#">Tableau de bord</a>
                            <ul>
                                <li><a href="{{ route('adminUsers') }}" target="_blank">Users</a></li>
                                <li><a href="{{ route('adminAnimals') }}" target="_blank">Animals</a></li>
                                <li><a href="{{ route('adminOrders') }}" target="_blank">Orders</a></li>
                            </ul>
                        </li>
                    @endif
                @endauth

            </ul>
            {{-- menu bar --}}
            <div class="navBar__menu">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <ul class="navBar__navList">
                @auth
                    <li>
                        <a href="{{route('login')}}">
                            Se connecter
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </a>
                    </li>
                @endauth
            </ul>

        </nav>
    </header>

    @yield('content')

    {{-- footer --}}
    <footer class="footer">
        <div class="footer__info">
            <div class="logo">
                <img src="{{ asset('pet-tag-logo.png') }}" alt="logo" />
            </div>
            <div class="footer__socialMedia">
                <a href="#">
                    <ion-icon class="ion-icon" name="logo-instagram"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon class="ion-icon" name="logo-facebook"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-tiktok"></ion-icon>
                </a>
            </div>
            <div class="footer__copyright">
                <p class="text">
                    &copy; 2022 par Tag Tag
                </p>
            </div>
        </div>
        <ul class="footer__list">
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Conditions générales d'utilisation</a></li>
            <li><a href="#">Politique en matière de cookies</a></li>
        </ul>
        <ul class="footer__contact">
            <li>
                <ion-icon class="ion-icon" name="location-outline"></ion-icon>
                <p>
                    111 NE 1ST STREET, SUITE #8508
                </p>
            </li>
            <li>
                <ion-icon class="ion-icon" name="call-outline"></ion-icon>
                <p>
                    305.414.2823
                </p>
            </li>
            <li>
                <ion-icon class="ion-icon" name="mail-outline"></ion-icon>
                <p>
                    test@example.com
                </p>
            </li>
        </ul>
    </footer>

    <button id="backToTopButton">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </button>

    <div class="gtranslate_wrapper"></div>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    {{-- <div class="gtranslate_wrapper"></div>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script> --}}


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- JS --}}
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- BOOTSTRAP SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- SWEATALERT SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
