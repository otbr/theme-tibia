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
                <h3>Laguna Islands</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Laguna Islands">
            </div>

            <p>
                In the south-eastern part of the Shattered Isles, adventurers can visit the Laguna Islands. Palm trees and banana plants grow plenty on the 3 idyllic isles. Long sandy beaches and crystal clear water invite to a sunbath. But watch out, the archipelago has also a rich wildlife. Not all creatures are as harmless as the cackling seagulls. Many a shipwrecked sailor has been attacked by innocent-looking amphibians such as multi-coloured frogs or slimy toads.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
