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
                <h3>Farmine</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Farmine">
            </div>

            <p>
                Not long ago, a dwarven expedition from Kazordoon reached Zao when searching for new ore veins. By using revolutionary new steamship technology which allowed them to map the great underground rivers, they suddenly reached a cave system full of rare ores on a hitherto unknown big landmass east of Yalahar. The dwarfs decided to erect a new outpost there which was only referred to as far far away mine for quite some time and from which finally the name Farmine was derived. Just like Kazordoon, Farmine is situated underground. The outpost is still under construction, but adventurers who gain the dwarfs' sympathy will find it a useful place to rest from their explorations.
            </p>

        </div>
    </div>
</div>
@endsection
