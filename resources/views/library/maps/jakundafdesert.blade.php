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
                <h3>Jakundaf Desert</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Jakundaf Desert">
            </div>

            <p>
                To the east of Mount Sternum extends a very dry area: Jakundaf Desert. As the high mountain intercepts all clouds that come from the sea in the west, hardly any precipitation falls there. The desert has produced a special flora and fauna which can manage with very little water. Especially characteristic are the tall cactuses. Some ruins show that even people lived there in ancient times. To protect themselves from the hot sun, they built most of their dwellings underground. But in course of time, wild animals and monsters have occupied the collapsed dungeons making them a deadly trap for every adventurer.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
