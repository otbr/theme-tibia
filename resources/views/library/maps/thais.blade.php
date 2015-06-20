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
                <h3>Thais</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Thais">
            </div>

            <p>
                Thais is the largest city in {{ server()->name() }}. It is situated in the southwest of the continent at the bay of the same name and extends far to the hinterland. Two rivers form a natural border in the north and the south, a strong city wall protects the east side. In the west, Thais is open to the sea. In former days, the harbour was crowded with trading vessels, which brought exotic goods and wealth to the city. The old lighthouse at the entrance to the bay is a relic of this golden epoch. Nowadays, the merchants and craftsmen of Thais earn their livings out of selling their wares to the many adventurers and travellers that visit the city. On a small island in the bay, King Tibianus III resides in his castle. Under his wise reign, Thais has grown to a center of science and art. The Royal Archive in the castle and the libraries of the guilds contain a wealth of wisdom. Several temples provide religious aid for needy wanderers.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
