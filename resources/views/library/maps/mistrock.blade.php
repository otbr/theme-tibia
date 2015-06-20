@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Mistrock</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Mistrock">
            </div>

            <p>
                Mistrock is a small and rocky island, situated south west of Yalahar. Actually, the island's land mass is nothing less than the summit of a huge undersea mountain. The coast line is rugged and the vegetation very sparse caused to its closeness to the Ice Islands. Not many people have set foot in this inhospitable environment.
                <br>
                There are even rumours about a dwarven city, similar to Kazordoon, hewn out of the rock deep beneath the surface. A dwarven emperor is supposed to rule this mysterious city that is said to be the centre of a huge mining system. Should these strange holes on the surface be indeed ventilation shafts for a whole secret dwarven tribe?
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
