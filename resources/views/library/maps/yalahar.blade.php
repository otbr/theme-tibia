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
                <h3>Yalahar</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Yalahar">
            </div>

            <p>
                Yalahar is a city that has grown so large that it even goes beyond the scope of the island it is situated on. In ancient times, the Yalahari erected this magnificent and shining city in the North where they lived together with some servants they had hired from other areas. All of a sudden, the very intelligent Yalahari vanished, leaving the city to their servants and minions. They, however, lacked the Yalahari's knowledge to maintain the city. In the course of time, Yalahar lost much of its glory and only the inner city still resembles some of its former glamour and luxury.
                <br>
                The other eight city quarters have fallen victim to lack of knowledge, failed experiments, plagues, fires and even the city's size, like the sunken quarter that simply broke apart and sunk into the ocean when the land masses were no longer able to carry it. Today, it is not advisable to visit the outer quarters of the city as they are mainly populated with scary monsters, mutated or even undead creatures that attack every unwanted intruder.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
