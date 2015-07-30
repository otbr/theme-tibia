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
                <h3>Cormaya</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Cormaya">
            </div>

            <p>
                Situated east of the main continent, adventurers can visit the little island Cormaya. Dwarfs live in dungeons under this little farmers town, and once in a while one of them even dares to appear at the surface. There are also rumours about a secret steamboat passage to Farmine and the dwarven city Kazordoon deep below ground level.
                <br>
                Apart from that, Cormaya is a peaceful town which can be reached by boat or an underground passage from Edron. Take the ship in the North to travel back to Edron or to visit the hermit Eremo. He is a very old and wise man who teaches special spells to promoted characters. Furthermore, Cormaya is an all-time favourite holiday island. Its silence is perfectly suited to relax from exhausting fights and adventures. The nearby sea invites to fishing trips, and moreover, Cormaya has its very own beach and swimming area which can be enjoyed all year long in {{ server()->name() }}'s constantly sunny weather.
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
