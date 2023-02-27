
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

@section('title', 'About page')

@section('content')

{{-- hero section --}}
<section class="aboutHero">
    <img src="{{ asset('points.png') }}" alt="..." class="aboutHero__img" />
    <div class="aboutHero__left">
        <h1 class="aboutHero__left__title title">
            Achetez nos médaillons d'identification intelligents pour chiens et chats.
        </h1>
        <p class="aboutHero__left__text text">
            Veillez à ce que vos chiens et chats soient toujours en sécurité grâce à Pet Tap, nos étiquettes pour animaux de compagnie haut de gamme.
        </p>
        <p class="aboutHero__left__text text">
            Ces étiquettes d'identification de haute qualité présentent toutes les avancées technologiques qui permettent de localiser facilement les animaux perdus, éliminant ainsi tous les maux de tête inutiles qui surviennent lorsque nos amis à quatre pattes s'égarent.
        </p>
        <p class="aboutHero__left__text text">
            Que vous cherchiez des étiquettes pour chiens ou des étiquettes pour chats, il y a une option pour chaque animal. Ces étiquettes intelligentes solides et moulées sous pression ne sont pas seulement un accessoire élégant, mais un outil pratique qui aidera votre animal à toujours retrouver le chemin de la maison.
        </p>
        <button>
            {{-- <a href="{{ route('animalProfile') }}" target="_blank" class="aboutHero__left__cta">demo profile</a> --}}
            <a href="#" target="_blank" class="aboutHero__left__cta">Démonstration profil</a>
        </button>
    </div>
    <div class="aboutHero__right">
        <img src="{{ asset('jamie-street-NxCUU0lujD8-unsplash.jpg') }}" alt="tag">
    </div>
</section>

{{-- others animal section --}}
<section class="otherAnimal">
    <img src="{{ asset('points.png') }}" alt="..." class="otherAnimal__img"/>
    <div class="otherAnimal__left">
        <img src="{{ asset('laura-college-K_Na5gCmh38-unsplash.jpg') }}" alt="...">
    </div>
    <div class="otherAnimal__right">
        <h1 class="otherAnimal__right__title title">
            Pas seulement des étiquettes pour les chats et les chiens...
        </h1>
        <p class="otherAnimal__right__text text">
            Nos étiquettes d'identification pour animaux sont parfaites pour les chats et les chiens, mais elles sont bien plus que cela. Les étiquettes pour animaux de compagnie aident à assurer la sécurité de nos amis à fourrure, alors achetez des étiquettes pour animaux de compagnie et cessez de vous inquiéter de la sécurité de votre compagnon bien-aimé.
        </p>
        <p class="otherAnimal__right__text text">
            Utilisez les étiquettes pour animaux de compagnie quel que soit le type de votre compagnon à quatre pattes. Avec nos médailles d'identification pour animaux de compagnie, votre ami restera en sécurité, qu'il s'agisse d'un chien, d'un chat ou d'un lapin qui aime se promener en dehors de sa cour.
        </p>
    </div>
</section>

{{-- pushin to buy section --}}
<section class="pushingToBuy">
    <h1 class="pushingToBuy__title title">
        Achetez des médailles pour animaux et ne vous inquiétez plus de la sécurité de votre compagnon.
    </h1>
    <p class="pushingToBuy__text text">
        Achetez des étiquettes pour animaux de compagnie pour assurer la sécurité de vos amis à quatre pattes et ne vous inquiétez plus de leurs allées et venues.<br>  Avec tous les avantages que présentent nos médailles d'identification pour animaux, la sécurité de votre animal est entre les meilleures mains possibles.
    </p>
    <div class="pushingToBuy__card">
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('ricky-kharawala-adK3Vu70DEQ-unsplash.jpg') }}" alt="">
            <p>
                Ce sont plus que de simples étiquettes pour chats et chiens. Vous pouvez utiliser nos étiquettes d'identification pour tout type d'animal.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('chewy-gWzTum_yMCg-unsplash.jpg') }}" alt="">
            <p>
                Elles sont si faciles à utiliser ! Il suffit d'appuyer votre téléphone sur l'étiquette de l'animal et vous obtiendrez toutes les informations dont vous avez besoin.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('carlos-muza-hpjSkU2UYSU-unsplash (1).jpg') }}" alt="">
            <p>
                Grâce à leur fabrication de haute qualité, ces médailles pour chiens conviendront même aux fauteurs de troubles qui aiment creuser et jouer dans la nature.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('kanhaiya-sharma-T_l246EK19I-unsplash.jpg') }}" alt="">
            <p>
                Le design est simple, et il vous permettra de comprendre les étiquettes d'identification des animaux de compagnie en quelques secondes.
            </p>
        </div>
    </div>
</section>
@endsection
