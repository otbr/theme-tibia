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
                <h3>Ulderek's Rock</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Ulderek's Rock">
            </div>

            <p>
                In the far east of {{ server()->name() }}, some tribes of the orcs have built a giant fortress and city on a hill at the coast. Even in ancient times, during the War over the Creation, this place was used as a military post by orcs for a long time, but finally the dwarfs managed to conquer and destroy it. Many centuries later the orcs returned and erected the strong fortress as it can be seen today. They named it "Ulderek's Rock" after Duke Ulderek, who had founded the first one. Rumour has it that his grave and many of the old treasures can be found below the rock in the middle of the fortress.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
