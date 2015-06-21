@extends('theme::app')

@title('Genesis')
@navigation('/library/genesis')
@bodyclass('library-genesis')

@section('head')
    <link href="http://fonts.googleapis.com/css?family=Martel" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-genesis.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h1>The Birth of the Elements</h1>

            <p class="first-letter">So it came to pass that {{ server()->name() }}, the living core of all creation, was born. It derived from the element of the earth, whereas Sula, the mighty sea lapping gently against {{ server()->name() }}'s shores, was created from the element of water. Air rose over creation and spread itself like a protective blanket over it, while fire was to be the fundament, warming the land with its eternal flames. Finally, all the elements had taken their places to form the world, and each of the individual parts of the God was sparkling with divine energy! Unfortunately, however, they were all wild and impetuous, driven by their impulsive natures. It was clear that none of them had inherited Tibiasula's gentle spirit - the harmony had been destroyed forever. However, Uman and Fardos did not give up. They decided to create something new from the elements, something that would resemble Tibiasula or at the very least honour her memory. For many aeons they studied the elements, until finally they made an important discovery - the elements held within them seeds of new creation, seeds which would bear fruit if one of the elder gods united with the elements. And so it came to pass that the gods had finally discovered the secret of life.</p>

            <p class="first-letter">Fardos was the first to try. He united with the element of fire, and fire bore him two children: Fafnar, a daughter, and Suon, a son. Soon enough these two new gods took their rightful places in creation. They chose to live in the sky that lay over it. And so it came to pass that two suns rose above creation to shed their light on it. Unfortunately, however, the two siblings were quite different in character, and they did not get on well. While Suon was calm and considerate, his sister Fafnar was reckless and wild, and she carelessly ravaged the world with her searing flames. Finally, Suon lost patience with his sister. He attacked her, and so a furious fight ensued. In this struggle Suon prevailed because he was stronger than his sister, and so Fafnar turned to flee across the sky, trying to reach the safety of the underworld where fire, her elemental mother, lived. However, Suon followed his sister even to her refuge in the underworld, and so Fafnar left it and once again fled across the sky. Suon continued his relentless chase, and he does so to this day. This is the reason why every day both of the suns disappear from the horizon for a time, causing the land to fall into darkness.</p>

            <div class="text-center">
                <img src="{{ asset('/pandaac/theme-tibia/img/genesis3.jpg') }}" alt="Genesis">
            </div>

            <p class="first-letter">Now Uman tried his luck. He united with earth which as we know is called {{ server()->name() }}. And earth bore him Crunor the Lord of the Trees. This god was full of charm and vitality. Like Fafnar, his capricious cousin, Crunor loved his own shape, but he was wiser than her and far more modest. He soon became a creator of living things himself, because he was inspired by creation and by the miraculous gift of life. He designed plants after his own image and placed them on the body of mother {{ server()->name() }}, until they covered all of her face like a beautiful garment.</p>

            <p class="first-letter">Fardos then united with air, and he begot Nornur the God of Fate. Nornur envied Crunor's proud shape because he had inherited his mother's fragile, delicate form, and in fact his body had hardly more substance than a fleeting cloud or a song in the wind. He asked his creative cousin to help him get a firm body of his own, but no matter how hard the cousins tried, they did not find a solution. Nornur always was what he had been in the first place: An ethereal god, the shadow of a shadow. To console his sad cousin, Crunor suggested to Nornur that he should at least create some living being that belonged to him so he could manifest himself in his servants. And so it came to pass that the spiders came into the world, elegant if eerie creatures who could weave gossamer webs of great beauty. Fragile and fleeting, these delicate webs resemble Nornur's ephemeral form.</p>

            <p class="first-letter">Finally, Uman united with Sula, the sea, and that was the hour that Bastesh the Mistress of the Sea was conceived. She was exceedingly beautiful, and Uman and Fardos were sad when they saw her, for she reminded them of Tibiasula, Bastesh's divine ancestress. But alas! Her beauty would not last. When Fafnar, the vain sun goddess, beheld Bastesh, she exploded with jealousy and attacked her with all the fury of her injured pride. Deep sank her fiery claws into the frail body of the newly born goddess, and had it not been for the other gods she would have torn her apart. That was the moment Suon decided to punish his sister for her misdeeds, and as a just punishment she was sentenced to continue her flight eternally, fleeing across {{ server()->name() }}'s skies from her brother's fury. Bastesh, however, never fully recovered from the terrible wounds inflicted on her by her jealous cousin. Her beauty was ruined forever almost as soon as it came to this world, but worse still were the scars she bore inside. She grew up to be shy and melancholic, preferring the quiet solitude of the ocean whose waters are said to be salty because of her ceaseless tears. However, even though she rarely communicated with the outside world her presence was revealed by an abundance of sea creatures that soon came to populate the ocean.</p>

            <p class="text-center">
                <big>Chapter II: <a href="{{ url('/library/genesis/2') }}">The Great Creation</a></big>
                <span class="spacer"></span>
                <big>Chapter IV: <a href="{{ url('/library/genesis/4') }}">The First Creatures</a></big>
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
