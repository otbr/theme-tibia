@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Fibula</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Fibula">
            </div>

            <p>
                The island Fibula is located off the southwest coast of the continent. There is a small village of the same name on it, whose inhabitants live on fishing, farming, and hunting. Below Fibula, there is the dreaded "Fibula Dungeon". The inhabitants of Fibula are always afraid that they might face the same destiny as the inhabitants of Calcanea, a small island to the north: One day, a giant spider came up from the dungeon and killed all of them. Moreover, a great sea-monster shows up from time to time in the bay between Fibula, Calcanea, and the continent, and so no one dares to sail there any more. The only way to Fibula is through a tunnel below the seabed.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
