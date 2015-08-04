@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Maps</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Darashia</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Darashia">
            </div>

            <p>
                In the far southeast lies a place of mysteries and wonders: the legendary continent of Darama. While snobbish Thaians might see it as a place of rock and sand only, adventurers know it as the continent of fascinating legends, ancient secrets, lost treasures and powerful djinns.
                <br>
                Its cultural center is the city of Darashia, founded by Daraman centuries ago, the heart of the desert-kingdom of Caliph Kazzan. All over the world, Darashia is famous for the sandwasp-honey, which is sought by magicians and alchemists for its magical properties and by the rich and vain for its rumoured youth-bringing abilities.
                <br>
                Most of the continent is occupied by a desert known as 'the Devourer'. In the northeast lies a pyramid which was old even in the times when the area was explored for the first time. In our days, this forbidden place was claimed by minotaur settlers from the old continent, who live in an uneasy peace with the humans.
                <br>
                Opposite beautiful Darashia, across the desert and the mountain known as the Plague Spike, lie the haunted ruins of the city of Drefia, the rumoured hideout of a necromancer conclave - a place the Darashians only dare to whisper about or use it to scare their children.
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
