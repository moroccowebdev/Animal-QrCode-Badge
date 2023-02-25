@extends('layout.app')

@section('title', 'About page')

@section('content')

{{-- hero section --}}
<section class="aboutHero">
    <img src="{{ asset('points.png') }}" alt="..." class="aboutHero__img" />
    <div class="aboutHero__left">
        <h1 class="aboutHero__left__title title">
            Buy our Smart Pet ID Tags for Dogs and Cats
        </h1>
        <p class="aboutHero__left__text text">
            Make sure that your dogs and cats are always safe and secured with Pet Tap, our top-of-the-line pet tags.
        </p>
        <p class="aboutHero__left__text text">
            These high-quality pet ID tags feature all the technological advancements that make it easy and straightforward to locate lost pets eliminating all the unnecessary headaches that are present whenever our four-legged friends manage to stray off.
        </p>
        <p class="aboutHero__left__text text">
            Whether you are looking for tags for dogs or tags for cats, there’s an option for every pet. These sturdy, diecast smart tags aren’t just a stylish accessory, but a handy tool that will help your pet always find their way back home.
        </p>
        <button>
            {{-- <a href="{{ route('animalProfile') }}" target="_blank" class="aboutHero__left__cta">demo profile</a> --}}
            <a href="#" target="_blank" class="aboutHero__left__cta">demo profile</a>
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
            Not just Tags for Cats and Dogs…
        </h1>
        <p class="otherAnimal__right__text text">
            Our pet ID tags are perfect for cats and dogs, but they are so much more than that. Pet Tap tags help keep our furry friends safe, so buy pet tags and stop worrying about the security of your beloved companion.
        </p>
        <p class="otherAnimal__right__text text">
            Use pet tags regardless of the type of your four-legged friend. With our pet ID tags, your friend will stay safe, whether it’s a dog, cat, or bunny that likes to wander outside of its yard.
        </p>
    </div>
</section>

{{-- pushin to buy section --}}
<section class="pushingToBuy">
    <h1 class="pushingToBuy__title title">
        Buy Pet Tags and Stop Worrying About the Safety of Your Companion
    </h1>
    <p class="pushingToBuy__text text">
        Buy pet tags to keep your four-legged friends safe and stop worrying about their whereabouts. <br> With all the benefits our pet ID tags have, your animal’s security is in the best hands possible.
    </p>
    <div class="pushingToBuy__card">
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('ricky-kharawala-adK3Vu70DEQ-unsplash.jpg') }}" alt="">
            <p>
                They are more than just tags for cats and dogs. You can use our pet ID tags for any type of pet.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('chewy-gWzTum_yMCg-unsplash.jpg') }}" alt="">
            <p>
                They’re so easy to use! Just tap your phone on the pet tag, and you’ll get all the information you need.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('carlos-muza-hpjSkU2UYSU-unsplash (1).jpg') }}" alt="">
            <p>
                Because of the high-quality build, these tags for dogs will sustain even the troublemakers that like to dig and play in the wild.
            </p>
        </div>
        <div class="pushingToBuy__card__item">
            <img src="{{ asset('kanhaiya-sharma-T_l246EK19I-unsplash.jpg') }}" alt="">
            <p>
                The design is straightforward, and it will allow you to understand pet ID tags in seconds.
            </p>
        </div>
    </div>
</section>
@endsection
