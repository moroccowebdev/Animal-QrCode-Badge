
{{-- @if (Session::has('check-admin'))
    @if (Session::get('check-admin') == 1)
        @extends('layout.admin')
    @endif

@else
    @if (Request::get('checkAdmin') || Request::get('reqCheck'))
        @if (Request::get('checkAdmin') == 1 || Request::get('reqCheck') == 1)
            @extends('layout.app')
        @endif
    @endif
@endif --}}

@extends('layout.app')

@section('title', 'Home page')

@section('content')

{{-- hero section --}}
<section class="hero">
    <div class="hero__left">
        <h1 class="hero__left__title">Les meilleures étiquettes intelligentes de localisation NFC pour animaux de compagnie</h1>
        <p class="hero__left__text">
            Même si nous faisons de notre mieux pour prendre soin de nos animaux de compagnie, nos chers compagnons à quatre pattes peuvent parfois s'égarer, ce qui nous cause un stress et des soucis inutiles.
        </p>
        <button class="hero__left__cta">
            <a href="{{ route('about') }}">
                à propos de Tag Tag
            </a>
        </button>
    </div>
    <div class="hero__right">
        <img src="{{ asset('hero-image.jpg') }}" alt="dog & cat" />
    </div>
</section>

{{-- problem section --}}
<section class="problem">
    <div class="problem__texts">
        <p>
            Malheureusement, on voit souvent sur les médias sociaux des propriétaires d'animaux désemparés qui demandent de l'aide pour retrouver leurs compagnons à fourrure disparus. Si les médias sociaux ont facilité la localisation des animaux perdus, l'utilisation de médailles pour animaux de compagnie peut s'avérer une méthode encore plus efficace pour retrouver votre petit bout de chou.
        </p>
        <p>
            Assurez la sécurité de vos animaux de compagnie grâce à un localisateur dédié qui fonctionne efficacement et ne nécessite pas l'utilisation d'une application.
        </p>
    </div>
    <img src="{{ asset('pets.png') }}" alt="pets" />
</section>

{{-- how to use section --}}
<section class="howToUse">
    <img src="{{ asset('points.png') }}" alt="..." />
    <div class="howToUse__left">
        <h1 class="title">
            Des étiquettes intelligentes pour vos amis intelligents à quatre pattes
        </h1>
        <p class="text">
            Si les animaux pouvaient parler, ils diraient que ce sont les meilleures étiquettes que vous pouvez trouver sur le marché. Sans qu'il soit nécessaire de publier sur les médias sociaux le nom d'un animal perdu, notre système d'identification permet aux gens de localiser votre adresse à partir des étiquettes intelligentes. Il n'est donc plus nécessaire d'emmener l'animal chez le vétérinaire pour rechercher l'identifiant sur la puce électronique. Fiable, efficace et rapide, votre animal retrouvera la sécurité de votre foyer en un rien de temps !
        </p>
        <a class="left__cta" href="{{ route('howToUse') }}">
            comment utiliser
        </a>
    </div>
    <div class="howToUse__right">
        <p class="text">REGARDEZ NOTRE VIDÉO CI-DESSOUS POUR SAVOIR COMMENT ENREGISTRER VOTRE ANIMAL DE COMPAGNIE.</p>
        <div class="howToUse__right__play">
            <ion-icon name="play-circle-outline"></ion-icon>
        </div>
        <iframe
            class="howToUse__right__youtube"
            src="https://www.youtube.com/embed/b8NY0PB5xgE"
            title="How to use smart tags"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>
</section>

{{-- why the pet tag --}}
<section class="whyPetTag">
    <div class="whyPetTag__left">
        <img src="{{ asset('pet-tag.jpg') }}" alt="pet tag" />
    </div>
    <div class="whyPetTag__right">
        <h1 class="whyPetTag__right__title">
            Ces étiquettes pour animaux ne sont pas appelées <span>étiquettes intelligentes</span> pour rien !
        </h1>
        <p class="whyPetTag__right__first text">
            Notre localisateur d'animaux domestiques est doté d'un grand nombre de fonctionnalités qui le rendent adapté à tous les compagnons à quatre pattes, quelle que soit leur taille.
        </p>
        <div class="whyPetTag__right__card">
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="create-outline"></ion-icon>
                <p class="text item-text">
                    Les propriétaires d'animaux qui déménagent fréquemment ou qui ont plusieurs adresses peuvent tirer grand profit de nos médailles d'identité pour animaux, car les informations peuvent être facilement modifiées en ligne un nombre illimité de fois.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="water-outline"></ion-icon>
                <p class="text item-text">
                    Nos bracelets intelligents résistants à l'eau sont conçus pour durer, ce qui les rend parfaits pour un ami à quatre pattes qui travaille dur, comme un chien de chasse.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="key-outline"></ion-icon>
                <p class="text item-text">
                    Notre conception simple à lire ne présente que les informations nécessaires dans un format direct.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="paw-outline"></ion-icon>
                <p class="text item-text">
                    Une carte d'identité robuste est une bonne carte d'identité pour animaux de compagnie, et nos étiquettes sont fabriquées en plastique moulé de haute qualité pour garantir leur durabilité.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="git-compare-outline"></ion-icon>
                <p class="text item-text">
                    Notre localisateur d'animaux utilise la technologie NFC, similaire à celle des cartes de crédit, ce qui signifie que vous pouvez simplement scanner l'adresse figurant sur l'étiquette en plaçant votre téléphone à proximité de celle-ci.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
