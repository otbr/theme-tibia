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
                    <h3>Draconia</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Draconia">
                </div>

                <p>
                    For many years, Draconia has only been a myth. Only recently a passage to the ancient dragon cemetery was found by brave adventurers. Here, they encountered not only dragons who came here to die but also the ruins of architecture that hints to inhabitants other than dragons in the past. Even now that the dangerous underground passage to the isle is known in certain interested circles, the dragon cemetery is still shrouded in mystery and speculation. No one knows if really all secrets of this ancient place are fully understood as not only dragons but also other creatures cause a constant threat to the explorers.
                    <br>
                    Curiously enough, on older maps the isle is called Dracoria which hints that the name was originally most likely not related to dragons. It is assumed that misspellings, misreadings and misinterpretations led to the change of the name in modern times.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
