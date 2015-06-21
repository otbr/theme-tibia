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
                <h3>Chazorai</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Chazorai">
            </div>

            <p>
                North of Zao, adventurers can find a small isle with the name Chazorai - Isle of Strife. As the name already suggests, competitions are a big topic on this isle. In the middle of Chazorai, a huge arena is found in which the ranking among the dragons is determined in the annual great tournament. Each dragon sends a hero of its choice to fight in its name. This ensures that actually none of the dragons themselves is endangered. Many lizard statues and symbols on the island hint that the isle was already of importance during the lizard reign.
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
