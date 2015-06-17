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
                <h3>Port Hope</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Port Hope">
            </div>

            <p>
                The colony of Port Hope is one of the newer acquisitions of the Thaian Kingdom. After Port Hope was founded as a small camp on the new continent, it was soon found out that the jungle of Tiquanda was rich on valuable resources. Quite soon the tradesmen of Venore stepped in to help the kingdom in this new challenge. Neither the climate nor the constant problems could break the spirit of the colonists. People from all over the known world gather there now, looking for new opportunities or just the chance to start over. Their combined efforts have created a small but thriving community that boldly faces the dangers and problems they encounter in this new land. Surrounded by the hostile jungle full of enemies and threats they have never seen before, the town is in constant need of valiant protectors and explorers. Hunters and adventurers alike meet here for their expeditions into the jungle and share the tales of their latest missions.
            </p>

        </div>
    </div>
</div>
@endsection
