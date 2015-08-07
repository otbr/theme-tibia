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
                    <h3>Grimlund</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Grimlund">
                </div>

                <p>
                    Grimlund is a rather small island located north east of Tyrsung and south east of Nibelor. Still, the island is big enough to provide enough space for Inukaya, the settlement of the chakoyas. One should not fall for the cute look of those furry creatures, they attack everything they are sighting and love it to spread chaos and mayhem. Beware if you stumble about small igloos as they mark the entrances of the subterranean caves of the chakoyas. Many careless adventurers got lost in the spacious cave system and ended as a delicious dinner for the ferocious chakoyas. Grimlund and Nibelor are only separated by brittle barrier ice. However, whenever it gets colder the ice shelves freeze up and create a passage between those 2 isles. At these times, the chakoyas regularly launch attacks on Nibelor.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
