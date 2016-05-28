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
                    <h3>Nargor</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Nargor">
                </div>

                <p>
                    Nargor, the second largest of the Shattered isles, is situated in the South West. Massive, jagged mountains and cliffs cover the entire landmass. Sharp reefs around Nargor are a real hazard to every ship that tries to reach the coast. The only ones who master the dangerous seaway are fierce pirates. They have founded a perfect hideout on this island that is marked by countless caves, tunnels and grottos. Their main base is a huge grotto at the southern side whose entrance is even large enough to steer a ship inside.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
