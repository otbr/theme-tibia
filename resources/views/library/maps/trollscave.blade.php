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
                    <h3>The Trolls' Cave</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="The Trolls' Cave">
                </div>

                <p>
                    To the east of Thais, below the hills at the Blood Bay, there is a labyrinth of holes and tunnels that are mainly populated by trolls: the Trolls' Caves. From time to time the trolls dare to attack merchants leaving the eastgate of Thais, and sometimes they even try to invade the town. The guards of Thais have tried to exterminate this plague, but the caves are so complex and vast that they didn't succeed. Therefore, the government is happy about every adventurer who kills some trolls off his own bat.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
