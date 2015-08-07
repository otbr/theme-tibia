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
                    <h3>Tyrsung</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Tyrsung">
                </div>

                <p>
                    Tyrsung, the second largest isle of the Ice Islands, is situated east of Hrodmir. The mountain Jotunar, home of the frost giants, is located right in the middle of this chilly island. It provides enough shelter and comfort to fit the needs of these huge icy creatures. The caves of the frost giants are a huge maze of small ice tunnels and larger stone lairs which extends deep into the mountain. Tyrsung is also the favourite hunting ground of the Venorean trappers as many seals and silver rabbits populate this isle. The peaceful shamans from the island Nibelor are constantly trying to sabotage those hunters to keep them from committing the cruel slaughter of baby seals.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
