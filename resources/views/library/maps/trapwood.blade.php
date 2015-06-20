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
                <h3>Trapwood</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Trapwood">
            </div>

            <p>
                Trapwood is a dangerous place even without the vile dworcs settling there. The carnivorous plants and the fertility of the poisonous animals living in Trapwood make this a place of constant danger, and unwariness is punished with death. The dworcs make things even worse. The green-skinned cannibals regard anything that enters their realm as their prey and rightful meal. Using the hazards of their environment and their own traps, they made Trapwood a place of no return. Deep below the surface they lurk for their victims. Plotting evil plans and brewing poisonous drinks, they wait for an opportunity to strike. Whoever gets caught in their cowardly traps has a good chance to end up as the dish of the day in the dworc caverns.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
