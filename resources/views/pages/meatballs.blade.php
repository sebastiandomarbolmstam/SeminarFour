@extends('layouts.app')
@section('content')
<div class='recipe-container'>
    <div class='description text'>
        <p>This is the number one swedish classic! A dish loved by
        all and spread across the world by IKEA. Serve with boiled or mashed potatoes.</p>
    </div>

    <div class='description pic'>
        <img class='picture' src={{ asset('images/meatballs.jpg') }} alt='Meatballs picture'>
    </div>

    <div class='description ingredients'>
        <h1 class='headline'>Ingredients</h1>
        <h2 class='subline'>Meatballs</h2>
        <ul class='recipe-list'>
            <li class='ing-li'>1 1/2 L milk</li>
            <li class='ing-li'>5 tbsp breadcrumbs</li>
            <li class='ing-li'>500 g minced meat</li>
            <li class='ing-li'>1/2 onion</li>
            <li class='ing-li'>1 egg</li>
            <li class='ing-li'>1 ts salt</li>
            <li class='ing-li'>1 pinch ground black pepper</li>
            <li class='ing-li'>1/2 ts sugar</li>
            <li class='ing-li'>butter</li>
            <li class='ing-li'>1 kg solid potatoes</li>
            <li class='ing-li'>1 jar lingonberry jam</li>
            <li class='ing-li'>1 jar pickled cucumber</li>
        </ul>
        <h2 class='subline'>Sauce</h2>
        <ul class='recipe-list'>
            <li class='ing-li'>2 dl double cream</li>
            <li class='ing-li'>1 tbsp cornstarch</li>
            <li class='ing-li'>2 1/2 dl water</li>
            <li class='ing-li'>1 meat broth cube</li>
        </ul>
    </div>

    <div class='description instructions'>
        <h1 class='headline'>Instructions</h1>
        <ul class='recipe-list'>
            <li class='ins-li'>Mix milk and breadcrumbs in a bowl and leave it to swell for 10 minutes.</li>
            <li class='ins-li'>Add minced meat, chopped onion, egg, salt, black pepper and sugar to the mixture and use
                your hands to mix thoroughly.</li>
            <li class='ins-li'>Wet your hands with cold water and roll the meatballs of desired size using your hands.</li>
            <li class='ins-li'>Boil the potatoes in salted water.</li>
            <li class='ins-li'>Heat butter in a pan and fry the meatballs for 5 minutes on medium heat.</li>
            <li class='ins-li'>Mix double cream and cornstarch and add to the pan along with water and broth and let simmer on
            low heat for 5 minutes.</li>
            <li class='ins-li'>Season with salt and pepper to your liking.</li>
            <li class='ins-li'>Serve the meatballs with potatoes, lingonberry jam and pickled cucumber.</li>
        </ul>
    </div>
    <div class="container">
    <comments :recipe="'{{$title}}'"></comments>
    </div>
</div>
@endsection