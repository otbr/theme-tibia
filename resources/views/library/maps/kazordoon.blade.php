@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Kazordoon</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Kazordoon">
            </div>

            <p>
                The extinct volcano in the centre of the continent is the home of a very ancient race, the dwarfs. Using their craftsmanship and their knowledge about the power of fire and earth, the dwarfs managed to tame the rivers of water and lava and to build their town, Kazordoon, in the heart of the mountain, whom they respectfully call "the Big Old One". Many trails and tunnels now run through the mountain, and even the road from Thais to Carlin and Ab'Dendriel leads along a dry canyon right through. Being proud of their great work, the dwarfs erected a giant statue at the entrance of the canyon. Prospecting for mineral resources the dwarfs have gathered great riches, and the legendary treasure chamber in their town shows only a small part of them.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
