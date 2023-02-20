<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Tag - @yield('title')</title>

    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('pet-tag-header-logo.png') }}" type="image/x-icon">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('sass/app.css') }}">
    
</head>
<body>
    <header>
        <nav class="navBar">
            <div class="logo">
                <img src="{{ asset('pet-tag-logo.png') }}" alt="logo" />
            </div>
            <ul class="navBar__navList hover">
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About me</a></li>
                <li><a href="{{ route('howToUse') }}">How to use</a></li>
                <li><a href="#">Contact me</a></li>
            </ul>
            {{-- menu bar --}}
            <div class="navBar__menu">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <ul class="navBar__navList">
                <li>
                    <a href="#">
                        Login 
                        <ion-icon name="person-circle-outline"></ion-icon>    
                    </a>
                </li>
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
                    <ion-icon class="ion-icon" name="logo-instagram"></ion-icon>
                </a>
            </div>
            <div class="footer__copyright">
                <p class="text">
                    &copy; 2022 by Take Me Home Pet LLC
                </p>
            </div>
        </div>
        <ul class="footer__list">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Cookies Policy</a></li>
            <li><a href="#">Blog</a></li>
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


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- JS --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>