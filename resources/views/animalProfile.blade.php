<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" href="{{ asset('pet-tag-header-logo.png') }}" type="image/x-icon">
    {{--
        Animal represent the name of animal 
        you must be changed and make it dynamic 
    --}}
    <title>Animal is profile</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('sass/app.css') }}">
</head>
<body>
    <header class="animalProfileHeader">
        <div class="animalProfileHeader__logo">
            <img src="{{ asset('pet-tag-logo.png') }}" alt="">
        </div>
    </header>
    
    <section class="animalProfile">
        <div class="animalProfile__info">
            <div class="animalProfile__info__left">
                <img src="{{ asset('/storage/animals/'. $animal->profile )  }}" alt="pet is profile">
                <p>
                    pet's name: <span>{{$animal->animal}}</span>
                </p>
            </div>
            <div class="animalProfile__info__right">
                {{-- <div>
                    <p class="p-tag">
                        Type: <span>Russian Blue</span>
                    </p>
                    <p class="p-tag">
                        Age: <span>1 year old</span>
                    </p>
                </div> --}}
                <div class="animalProfile__info__right__owner">
                    <p>
                        Pet parent's name :
                        <span>{{$animal->name}}</span>
                    </p>
                    
                    <p>
                        <ion-icon name="call-outline"></ion-icon>
                        {{$animal->phone}}
                    </p>
                </div>
                <p class="p-tag">
                    <ion-icon name="location-outline"></ion-icon>
                    {{$animal->adress}}
                </p>
            </div>
        </div>
    </section>

    {{-- <div id="map"></div>
    <!-- 
        The `defer` attribute causes the callback to execute after the full HTML
        document has been parsed. For non-blocking uses, avoiding race conditions,
        and consistent behavior across browsers, consider loading using Promises
        with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
        defer
    ></script> --}}
    <iframe 
        class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52979.37520940773!2d-6.973298309511416!3d33.909969928417986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7129ada04c2fb%3A0x35aeb81f6b145b90!2sTemara!5e0!3m2!1sen!2sma!4v1676849881924!5m2!1sen!2sma"  
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <footer class="animalProfileFooter">
        <p>https://tagtag.ma</p>
        <p>&copy; 2023 by pettag.com</p>
    </footer>
    {{-- JS --}}
    <script src="{{ asset('js/main.js') }}"></script>

    {{-- icons script --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>