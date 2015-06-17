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
                <h3>Femor Hills</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Femor Hills">
            </div>

            <p>
                Femor Hills are located in north-central Tibia. As they are a difficult terrain with many small hills, even the road from Thais to Carlin gives them a wide berth. Only some tribes of wild goblins live in this inhospitable area and ambush travellers that try to find a shortcut on their way to Carlin. In former days, the inhabitants of Carlin prospected for mineral resources in the hills, and the old tunnels are still worth an investigation.
            </p>

        </div>
    </div>
</div>
@endsection
