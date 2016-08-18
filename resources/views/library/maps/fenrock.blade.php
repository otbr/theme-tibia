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
                    <h3>Fenrock</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Fenrock">
                </div>

                <p>
                    Fenrock, one of {{ server()->name() }}'s smallest islands, is situated right in the middle between Yalahar and the Ice Islands. The island's green and smooth surface is partly covered with snow, but hot geysers create an almost sub-tropical climate beneath the surface. For this reason, also creatures that are rather exotic in cold areas have found a living environment in Fenrock's dungeons. Fenrock can be reached from Yalahar and the nearby island Mistrock.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
