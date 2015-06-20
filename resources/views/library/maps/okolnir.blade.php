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
                <h3>Okolnir</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Okolnir">
            </div>

            <p>
                The island Okolnir is found south east of Hrodmir. It is the only place in {{ server()->name() }} where you can marvel at hot geysers. Still adventurers should be careful here, as Okolnir is also the home of the frost dragons. Legend has it that frost dragons have emerged from dragon lords at the time the isles suddenly froze due to the splitting of the frostheart spire. Many dragons died at this time, but those that have been resistant enough survived and transformed into frost dragons.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
