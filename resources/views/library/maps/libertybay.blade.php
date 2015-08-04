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
                <h3>Liberty Bay</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Liberty Bay">
            </div>

            <p>
                Located on Vandura, the largest of the Shattered Isles, Liberty Bay is the jewel of the South Seas. Not too long ago, the people in the lovely seaport lived together in harmony, making a living from the rich resources the land provided. Unfortunately, some Thaians found out about the natural treasures of the Shattered Isles. Soon, the formerly peaceful little settlement had grown to a real town. Oppressed by the Thaians who took over the peaceful little settlement like a huge grasshopper swarm a potato field, many of the natives are poor people today. They live in ramshackle huts in the South and rest their weary heads on straw mats after a hard day's work on the plantations. In contrast, the Thaians, under the leadership of governor Percy Silverhand, reside in splendid and luxurious mansions in the northern part of the town.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
