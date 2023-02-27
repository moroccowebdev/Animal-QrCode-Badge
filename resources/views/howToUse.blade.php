@extends('layout.app')

@section('title', 'how to use page')
@section('content')

<section class="howToUsePage">
    <img src="{{ asset('points.png') }}" alt="..." class="howToUsePage__img"/>
    <div class="howToUsePage__left">
        <h1 class="howToUsePage__left__title title">
            Achetez et installez des étiquettes pour animaux en quelques minutes.
        </h1>
        <p class="howToUsePage__left__text text">
            Acheter nos étiquettes intelligentes pour animaux n'a jamais été aussi facile ! Avec The Pet Tap, nous connectons les étiquettes avec la puce avant que vous ne les ayez en main. Donc, tout ce que vous aurez à faire après l'achat et la réception des étiquettes est.. :
        </p>
        <p class="howToUsePage__left__text text">
            <span>1.</span>
            Activez votre profil en touchant la balise avec votre téléphone et en définissant un nouveau mot de passe.
        </p>
        <p class="howToUsePage__left__text text">
            <span>2.</span>
            Donnez à votre animal sa nouvelle médaille
        </p>
        <p class="howToUsePage__left__text text">
            <span>3.</span>
            Connectez-vous à votre profil
        </p>
        <p class="howToUsePage__left__text text">
            <span>4.</span>
            Remplissez les informations nécessaires sur votre bébé à poils !
        </p>
        <p class="howToUsePage__left__text text">
            Nos étiquettes NFC pour chiens et chats sont conçues pour retrouver plus rapidement votre animal de compagnie adoré en cas de perte. Le fait de remplir toutes les données requises sera d'une grande aide pour l'application The Pet Tap ainsi que pour la personne qui retrouvera votre animal.
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
                Avec Pet Tap, vous n'avez pas à vous soucier de la sécurité de votre compagnon.
            </h1>
            <p class="main__first__right__text text">
                En indiquant le nom de l'animal, son numéro de téléphone et l'adresse à laquelle vous souhaitez qu'il soit ramené, le trouveur peut sauver la situation et ramener rapidement votre compagnon à quatre pattes à la maison.
            </p>
            <p class="main__first__right__text text">
                <span>1.</span>
                Le trouveur n'aura pas à emmener votre animal chez le vétérinaire.
            </p>
            <p class="main__first__right__text text">
                <span>2.</span>
                Il leur suffit de toucher l'étiquette avec leur smartphone compatible NFC pour que le code soit scanné.
            </p>
            <p class="main__first__right__text text">
                <span>3.</span>
                Avec toutes les informations entre les mains des chercheurs, les retrouvailles avec votre compagnon se feront en un rien de temps.
            </p>
            <p class="main__first__right__text text">
                Ne vous inquiétez pas non plus de déplacer ou de modifier les informations. Vous pouvez modifier les profils autant de fois que vous le souhaitez.
            </p>
            <p class="main__first__right__text text">
                Et, avec nos médailles d'identification pour animaux, vos informations restent privées aussi longtemps que vous le souhaitez. Vous pouvez verrouiller votre profil, garder les informations pour vous, et ne le déverrouiller que si nécessaire. Ainsi, votre animal sera ramené chez lui en toute sécurité, sans risque pour sa vie privée.
            </p>
        </div>
        <img src="{{ asset('points-y.png') }}" alt="..." class="main__first__img"/>
    </div>

    <div class="main__second">
        <p class="text">
            Avec tous les avantages que présentent nos étiquettes d'identification pour animaux, la sécurité de votre animal n'est jamais remise en question.
        </p>

        <div class="main__second__card">
            <div class="main__second__card__item">
                <img src="{{ asset('dan-barrett-0EhFkzIinlk-unsplash.jpg') }}" alt="..." />
                <p>
                    Ces étiquettes ne sont pas seulement destinées aux chats et aux chiens. Vous pouvez utiliser ces étiquettes pour tout type d'animal.
                </p>
            </div>
            <div class="main__second__card__item">
                <img src="{{ asset('ray-hennessy-xUUZcpQlqpM-unsplash.jpg') }}" alt="..." />
                <p>
                    La haute qualité de nos étiquettes d'identification pour animaux de compagnie résistera à l'usure la plus rude que votre animal lui fera subir.
                </p>
            </div>
            <div class="main__second__card__item">
                <img src="{{ asset('chewy-3cAMUE3YAO8-unsplash.jpg') }}" alt="..." />
                <p>
                    La conception est simple et vous permettra de comprendre les étiquettes pour animaux de compagnie en quelques secondes.
                </p>
            </div>
        </div>

        <p class="main__second__text">
            Alors, n'attendez plus, achetez des étiquettes pour animaux et assurez la sécurité de votre compagnon avec Pet Tap.
        </p>
    </div>
</section>



@endsection
