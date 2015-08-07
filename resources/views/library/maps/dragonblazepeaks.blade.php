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
                    <h3>Dragonblaze Peaks</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Dragonblaze Peaks">
                </div>

                <p>
                    South of the Muggy Plains, a huge mountain chain extends from coast to coast on the continent Zao. The mountains are so high that their peaks are even covered with snow. Many canyons cross the mountains and several caves grant shelter, but only one mountain pass allow adventurers to cross this rock mass. That is if one is brave enough to face the dragons that inhabit these mountains and does not get captured in the large underground fortress of the Draken.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
