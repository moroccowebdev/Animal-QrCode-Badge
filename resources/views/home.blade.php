
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
        <h1 class="hero__left__title">The Best Smart Pet NFC ID Locator Tags</h1>
        <p class="hero__left__text">Even with our best efforts to care for our pets, our beloved four-legged companions can sometimes wander off, causing us undue stress and worry.</p>
        <button class="hero__left__cta">
            <a href="{{ route('about') }}">
                about pet tap
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
            Regrettably, we often come across social media posts where distraught pet owners seek help in finding their missing furry companions. While social media has made it easier to locate lost pets, opting for pet tags can prove to be an even more effective and efficient method of finding your lost bundle of joy.
        </p>
        <p>
            Ensure the safety of your pets with a dedicated pet locator that operates efficiently and does not require the use of an app.
        </p>
    </div>
    <img src="{{ asset('pets.png') }}" alt="pets" />
</section>

{{-- how to use section --}}
<section class="howToUse">
    <img src="{{ asset('points.png') }}" alt="..." />
    <div class="howToUse__left">
        <h1 class="title">
            Smart tags for Your Smart Four-legged Friends
        </h1>
        <p class="text">
            If pets could talk, they would say that these are the best tags you can get on the market. Without the need for having to post about a fond lost pet on social media, our pet ID enables people to locate your address from the smart tags. This also eliminated the need for taking the pet to the vet to look for the ID on the pet microchip. Reliable, efficient, and fast, your pet will be in the safety of your home in no time!
        </p>
        <a class="left__cta" href="{{ route('howToUse') }}">
            how to use
        </a>
    </div>
    <div class="howToUse__right">
        <p class="text">WATCH OUR VIDEO BELOW TO FIND OUT HOW TO REGISTER YOUR PET TAP</p>
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
            These Pet Tags aren’t called <span>Smart Tags</span> for Nothing!
        </h1>
        <p class="whyPetTag__right__first text">
            Our pet locator comes with a handful of great features that make it suitable for every four-legged companion, no matter the size.
        </p>
        <div class="whyPetTag__right__card">
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="create-outline"></ion-icon>
                <p class="text item-text">
                    Pet owners who frequently move or have multiple addresses can benefit greatly from our pet ID tags, as the information can be easily edited online an unlimited number of times.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="water-outline"></ion-icon>
                <p class="text item-text">
                    Our water-resistant smart tags are built tough, making them the perfect fit for a hard-working four-legged friend, such as a hunting dog.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="key-outline"></ion-icon>
                <p class="text item-text">
                    Our simple-to-read design only presents necessary information in a straightforward format.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="paw-outline"></ion-icon>
                <p class="text item-text">
                    A sturdy pet ID is a good pet ID, and our tags are made of high-quality molded plastics to ensure durability.
                </p>
            </div>
            <div class="whyPetTag__right__card__item">
                <ion-icon class="ion-icon" name="git-compare-outline"></ion-icon>
                <p class="text item-text">
                    Our pet locator utilizes NFC technology, similar to what credit cards use, which means you can simply scan the address on the tag by placing your phone near it.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
