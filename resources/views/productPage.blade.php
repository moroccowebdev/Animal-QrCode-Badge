<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tag Tag product page</title>
    
    {{-- SWEATALERT CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('tag-tag.jpg') }}" type="image/x-icon">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('sass/app.css') }}">
</head>
<body>
    <header>
        <nav class="productNav">
            <a class="logo" href="{{ route('/') }}">
                <img src="{{ asset('tag-tag.jpg') }}" alt="..."/>
            </a>

            <a class="productNav__cta" href="#form">Buy now</a>
        </nav>

        <div class="announcement">
            <p>
                Free delivery in 24h / 48h throughout Morocco
            </p>
        </div>

    </header>

    <section class="productNav-main">
        <p>
            Médaille d'identification pour le chien <br>
            avec <strong>QR</strong> et <strong>NFC</strong> <br>
            Profil en ligne pour animaux de compagnie
        </p>
        <div class="productNav-main__div">
            <img class="" src="{{ asset('IMG-20230226-WA0014.jpg') }}" alt="...">
            <img class="" src="{{ asset('IMG-20230226-WA0015.jpg') }}" alt="...">
        </div>
        <p>
            <strong>180,00 DHS</strong> <br>
            livraison gratuite & paiement a la livraison
        </p>
        <a class="productNav__cta" href="#form">Buy now</a>
        <br>
        <img class="productNav-main__img" src="{{ asset('IMG-20230226-WA0013.jpg') }}" alt="...">

        <p>Protegez Vos Animaux de Compagnie Tout les jours</p>
    
        <div class="productNav-main__steps">
            <div>
                <span>1</span> 
                <p>
                    Scannez le QR sur l'étiquette de l'animal 
                </p>
            </div>
            <div>
                <span>2</span>
                <p>
                    enregistrer avec un compte ou se connecter
                </p>
            </div>
            <div>
                <span>3</span>
                <p>
                    cliquer sur le button activer
                </p>
            </div>
            <div>
                <span>4</span>
                <p>
                    Modifier le profile en lignede votre animal de compagnie 
                </p>
            </div>
        </div>
    </section>

    <section id="form" >
        <div class="container my-5">
            <form action="{{route('buyNow')}}" method="post" class="card w-75 mx-auto my-5 p-5" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="fullname" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Your fullname" name="fullname">
                </div>
                <div class="my-3">
                    <label for="city" class="form-label">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Your city" name="city">
                </div>
                <div class="my-3">
                    <label for="Tel" class="form-label">Tel:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Your phone" name="phone">
                </div>
                <div class="my-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                </div>
                <button type="submit" class="mt-3 btn btn-warning">Buy Now</button>
            </form> 
        </div>
    </section>

    
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = {"default_language":"fr","languages":["fr","ar"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"inline"}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    {{-- JS --}}
    <script src="{{ asset('js/main.js') }}"></script>
    
    {{-- SWEATALERT SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>


