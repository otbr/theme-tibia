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
                <h3>Chor</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Chor">
            </div>

            <p>
                The once mighty race of the lizards found a new home in Chor. Living in makeshift huts, the proud warriors and wizards dream of the glory of the past. The lizards might have been defeated but they are not willing to give up yet. In a newly found unity, a common goal gives them hope and direction. Since the feeble beginnings of their new settlement, they have been trying to rebuild some of their glory and power. Out of their settlement, the lizards once again stretch their claws for the power they once wielded - and aim for the domination of the jungle. Building a new temple against all odds and regardless of the costs, they strive to call down the power of their dark snake-god to annihilate those who stand in their way. Funnily enough this happens to be all non-lizard people in Tiquanda.
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
