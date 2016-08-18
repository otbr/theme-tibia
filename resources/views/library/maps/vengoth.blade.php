@extends('theme::app')

@section('title', 'Maps')
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
                    <h3>Vengoth</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Vengoth">
                </div>

                <p>
                    Vengoth takes up the south-western part of the continent Zao. In the past, rich green pastures and fertile soil marked this place. Several years ago, however, the grass suddenly stopped to grow, the soil became barren and rocky, and the crystal clear water turned muddy and dirty. All life seemed to have vanished overnight. Rumour has it that at this time four brothers sought refuge in the old ruinous castle in the centre of the island, and that mysterious and awful things have been happening on this island ever since. Fact is that the island has turned into a dusky and barren land with stony ground and sharp rock formations.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
