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
                <h3>Southern Ice Islands</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Southern Ice Islands">
            </div>

            <p>
                The Southern Ice Islands are an archipelago far out in the Nordic Ocean. Due to their exposed position they have a very rough climate and are permanently covered with snow and ice. They have produced a special flora and fauna, which is adapted to this inhospitable area. Some imperturbable adventurers have founded a small village on one of the islands, Senja, and explore the depths of the islands seeking for mineral resources. The Nordic {{ server()->name() }} Ferries provide a cheap and reliable transport system between the continent and the three largest islands, Senja, Folda, and Vega. The landing place on the continent is located to the northwest of Carlin, vis-à-vis to Senja.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
