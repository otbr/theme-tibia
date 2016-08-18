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
                    <h3>Banuta</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Banuta">
                </div>

                <p>
                    After the fall of the lizard empire, their former ape slaves claimed the capital of their masters as their new home. Lacking the skills of the lizard race and having only little interest in continuing their endless work on the temples and housings, the beautiful stone buildings fell into ruin as the jungle claimed back what is its by right. Today the city of Banuta is only a pale shadow of its past, but its new owners could not care less about it. All they care for is their regained freedom. Having learnt to use tools under the mastery of the lizards, the ape became dependent on equipment but they could not build them on their own. So after pillaging and plundering the lizards remains, they started to raid the lizards and, recently, the new settlements of the humans that were far more promising and proved to be easy prey.
                </p>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
