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
                    <h3>Carlin</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Carlin">
                </div>

                <p>
                    The beautiful city of Carlin is located at the north coast of the Kings' Gulf. Carlin, which is reigned by Queen Eloise, has always been a rival of Thais. Like the queen, all senior officers, the merchants, and even the city guards are women. Men are only allowed to do minor work. Be that as it may, Carlin is a very lovely city, with well-tended parks, a beach, nice houses, and clean streets. Science and fine arts are also flourishing. Each guild has established a representation and tries to gather knowledge from the travellers. A strong city wall protects the prospering city against the monsters and wild animals of the surrounding areas.
                </p>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
