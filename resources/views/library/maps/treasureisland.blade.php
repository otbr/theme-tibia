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
                    <h3>Treasure Island</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Treasure Island">
                </div>

                <p>
                    South-west of Vandura, a small island fascinates people from all over {{ server()->name() }}. It is said that pirates used this place to hide their treasures there, buried deep in the sand. Thousands of treasure hunters have dug for their luck there and now, the once idyllic island reminds one of a huge building site. Everywhere you have to watch out not to fall in one of the numerous holes or to trip over some rubbish or some stones laying around.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
