@extends('layout.app')

@section('title', 'how to use page')
@section('content')

<section class="howToUsePage">
    <img src="{{ asset('points.png') }}" alt="..." class="howToUsePage__img"/>
    <div class="howToUsePage__left">
        <h1 class="howToUsePage__left__title title">
            Buy and Set up Pet Tags in Minutes
        </h1>
        <p class="howToUsePage__left__text text">
            Shopping for our smart pet tags has never been easier! With The Pet Tap, we connect the tags with the chip before you have them in your hand. So, all you’ll need to do after purchasing and receiving the tags is:
        </p>
        <p class="howToUsePage__left__text text">
            <span>1.</span>
            Activate your profile by tapping the tag with your phone and setting up a new password
        </p>
        <p class="howToUsePage__left__text text">
            <span>2.</span>
            Give your pet their new tag
        </p>
        <p class="howToUsePage__left__text text">
            <span>3.</span>
            Log in to your profile
        </p>
        <p class="howToUsePage__left__text text">
            <span>4.</span>
            Fill out the necessary information about your furry baby!
        </p>
        <p class="howToUsePage__left__text text">
            Our NFC tags for dogs and cats are made to recover your beloved pet faster if ever lost, so filling in all the required data will be of significant help to The Pet Tap app as well as the finder of your pet.
        </p>
    </div>
    <div class="howToUsePage__right">
        <img src="{{ asset('lepeto-u8B94yDiFfA-unsplash.jpg') }}" alt="...">
    </div>
</section>

<section class="main">
    <div class="main__first">
        <div class="main__first__left">
            <img src="{{ asset('anusha-barwa-ppKcYi1CXcI-unsplash.jpg') }}" alt="...">
        </div>
        <div class="main__first__right">
            <h1 class="main__first__right__title title">
                With Pet Tap, You Don’t Have to Worry About the Safety of Your Companion
            </h1>
            <p class="main__first__right__text text">
                By posting the pet’s name, phone number, and the address you wish your buddy returned to, the finder can save the day and bring your four-legged friend home fast.
            </p>
            <p class="main__first__right__text text">
                <span>1.</span>
                The finder won’t have to take your pet to the veterinarian
            </p>
            <p class="main__first__right__text text">
                <span>2.</span>
                They will simply tap the tag with their NFC-enabled smartphone, and the code will be scanned
            </p>
            <p class="main__first__right__text text">
                <span>3.</span>
                With all the information at the finders’ hands, the reunion with your companion will happen in no time.
            </p>
            <p class="main__first__right__text text">
                Don’t worry about moving or changing the info, either. You can edit the profiles as many times as you’d like.
            </p>
            <p class="main__first__right__text text">
                And, with our pet ID tags, your information stays private as long as you wish. You can lock your profile, keep the information to yourself, and only unlock it when necessary. That way, your pet will be safely returned home without any privacy risks.
            </p>
        </div>
        <img src="{{ asset('points-y.png') }}" alt="..." class="main__first__img"/>
    </div>
    
    <div class="main__second">
        <p class="text">
            With all the benefits our pet ID tags have, your animal’s safety is never in question.
        </p>

        <div class="main__second__card">
            <div class="main__second__card__item">
                <img src="{{ asset('dan-barrett-0EhFkzIinlk-unsplash.jpg') }}" alt="..." />
                <p>
                    They are more than just tags for cats and dogs. You can use these tags for any type of pet.
                </p>
            </div>
            <div class="main__second__card__item">
                <img src="{{ asset('ray-hennessy-xUUZcpQlqpM-unsplash.jpg') }}" alt="..." />
                <p>
                    The high quality of our pet ID tags will withhold even the toughest wear and tear your pet will put it through.
                </p>
            </div>
            <div class="main__second__card__item">
                <img src="{{ asset('chewy-3cAMUE3YAO8-unsplash.jpg') }}" alt="..." />
                <p>
                    The design is straightforward, and it will allow you to understand pet tags in seconds.
                </p>
            </div>
        </div>

        <p class="main__second__text">
            So, wait no more, buy pet tags, and keep your companion safe with Pet Tap.
        </p>
    </div>
</section>



@endsection