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
                    <h3>Island of Destiny</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Island of Destiny">
                </div>

                <p>
                    The Island of Destiny is a small isle in the North of Rookgaard. If you trained your character on Rookgaard, you will here decide which path your character will take in its {{ server()->name() }} career. Ambassadors of the various vocations reside on this island providing young adventurers with useful information. There are four vocation specific dungeons on this island in which players can gather some experience.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
