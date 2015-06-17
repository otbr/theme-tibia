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
                <h3>Plains of Havoc</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Plains of Havoc">
            </div>

            <p>
                The Plains of Havoc are lowlands in the southeast of Tibia. They are one of the most dangerous places in the whole world. In ancient times demons and other undead creatures forced their way through the Pits of Inferno to the surface. They brought devastation all over the region, and only some collapsed ruins are still a sign of the town that was located there. Too late came the armies from the other cities, but at least they managed to drive the demons back to where they had come from and sealed the Pits of Inferno again. However, some of the undead managed to escape and are still roaming the uninhabited area and especially the small Isle of the Mists off the coast.
            </p>

        </div>
    </div>
</div>
@endsection
