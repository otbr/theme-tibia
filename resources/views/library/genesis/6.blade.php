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

            <h1>The Creation of the Humans</h1>

            <p class="first-letter">So it came to pass that the elder gods created Banor the Divine Warrior. He was the very first human, and though his creators gave him powers no other member of his race would ever be able to match, he already displayed many characteristics which clearly proved him to be human. To this very day he is especially revered as an ideal of chivalry and bravery by those who dedicate themselves to the art of hand-to-hand combat, for he was just and brave in battle, and his prowess with the blade is legendary to this very day. Legend has it that the gods were also planning to create a twin brother for Banor, and that this twin was to wield incredible magical powers. However, it is said that Zathroth stole this prototype to create from it the very first demon overlord. Whatever the truth, the fact that the humans had entered the world of {{ server()->name() }} could no longer be overlooked. For despite their many weaknesses they were a brave and clever race, and they adapted surprisingly well to the grim world into which the gods had cast them. They took up the fight against the undead and the various others despicable creatures that roamed the lands, and soon the hordes realised that a new, powerful enemy had arisen.</p>

            <div class="text-center">
                <img src="{{ asset('/pandaac/theme-tibia/img/genesis6.jpg') }}" alt="Genesis">
            </div>

            <p class="first-letter">Many a fierce and bloody battle was fought, but Banor, a brave and shrewd leader, led his people from victory to victory. Still, those triumphs were often paid for with heavy sacrifices, and the sheer numbers of enemies the humans had to face was overwhelming. The gods did all they could to assist their new champion race in its struggle. Uman introduced the race into the arcane art of magic, and many a human followed his vocation to become a powerful sorcerer. Others were instructed by Crunor the Lord of the Trees to learn about the secrets of life, and they became druids and learnt how to heal those of their brethren who were wounded in the war against the relentless enemy. Of all humans it was them who learnt most about the secrets of life, and in fact some of them assisted Crunor in creating many creatures that populate {{ server()->name() }} today. But many of their creations were soon enough wiped out in the course of the cruel struggle. And the war went on and on.</p>

            <p class="first-letter">Banor had established a strong foothold in the land, and he consolidated his rule by founding a dynasty. He married Kirana, the noblest of all women, and she bore him Elane, who eventually came to master both the arts of distance fighting and the arcane art of magic, thus becoming the very first of the noble paladins. To this day the position of the leader of all paladins must only be filled with a woman, and those who do so invariably adopt the honorary name of Elane. Later on Elane fought side by side with her father, because Banor, who was in fact a demigod, was to live for many centuries. But even this did not help to turn the tide. The human warriors triumphed whenever Banor led them, but then the mighty human champion could not be everywhere, and those human armies that went into battle without him were vanquished by the dark hordes all too often.</p>

            <p class="text-center">
                <big>Chapter V: <a href="{{ url('/library/genesis/5') }}">The Age of Chaos</a></big>
                <span class="spacer"></span>
                <big>Chapter VII: <a href="{{ url('/library/genesis/7') }}">{{ server()->name() }}'s Renewal</a></big>
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
