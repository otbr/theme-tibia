@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')
@section('navigation', '/library/maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Treasure Island</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Treasure Island">
            </div>

            <p>
                South-west of Vandura, a small island fascinates people from all over {{ server()->name() }}. It is said that pirates used this place to hide their treasures there, buried deep in the sand. Thousands of treasure hunters have dug for their luck there and now, the once idyllic island reminds one of a huge building site. Everywhere you have to watch out not to fall in one of the numerous holes or to trip over some rubbish or some stones laying around.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
