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
                    <h3>Temple of Light</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Temple of Light">
                </div>

                <p>
                    The Temple of Light is a monument of the constant war against darkness. In ancient times, the temple was erected to protect a point where the barriers between worlds are weak. As a bastion in a never-ending war, it became a spark of light and hope in times of darkness and despair. Once a year, the impressive Temple of Light becomes the focus point of this battle. It is this temple that the forces of darkness wish to defile. The actions of some dedicated humans will decide if the dark side succeeds.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
