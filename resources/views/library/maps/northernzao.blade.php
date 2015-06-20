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
                <h3>Nothern Zao</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Nothern Zao">
            </div>

            <p>
                Once the pride of the lizard empire and house of blooming gardens and thriving villages, the northern part has changed by the rising corruption to something ... else.
                <br>
                A landscape like born out of a madman's nightmare - the once beautiful area has become a toxic threat. Already long ago nature has lost the struggle for this place and was distorted to an aggressive, murderous entity itself. Poisonous, prickly and with a life of their own, even the plants have mutated and reflect the new face of the north. Animals as they were once known became extinct, but some were replaced with cruel caricatures of their former selves. Bizarre and nightmarish creatures roam the gardens of evil and poisonous woods. Each and everything seems to be preying on each other. Even the soldiers of the empire rarely leave the confines and shelter of their cities and fortresses in less than a squad strength.
                <br>
                This area is a challenge on its own and yet not devoid of perverted wonders. Hidden beneath a sheet of decay and corruption, the secrets and treasures of a glorious past lay buried.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
