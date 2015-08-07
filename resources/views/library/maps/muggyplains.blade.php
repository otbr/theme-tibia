@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')
@section('navigation', '/library/maps')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Maps</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="text-center">
                    <h3>Muggy Plains</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Muggy Plains">
                </div>

                <p>
                    The Muggy Plains are bordered by the Dragonblaze Peaks in the South, and are bounded by the Great Gate in the North. The warm and humid climate of the Muggy Plains allows a lush growth of all kinds of plants in this area. Bamboo trees, colourful flowers, and rich green pastures determine the landscape and make the Muggy Plains an eye candy for everybody that is lucky enough to reach this place. The architectural artistry of various temples in the whole area testify to former greatness of the lizard culture of old.
                    <br>
                    Sadly, in the last decades, corruption found its way into this beautiful landscape. The source of the corruption is yet unknown, but the further you go north, the more obvious are the signs of destruction and decay caused by it.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>
    
@stop
