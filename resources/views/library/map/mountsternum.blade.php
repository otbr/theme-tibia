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
                <h3>Mount Sternum</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Mount Sternum">
            </div>

            <p>
                Mount Sternum is a high mountain near the centre of the continent. Together with the torrential rivers having their sources there, it separates the peninsula of Thais from the rest of the continent. In former days, travellers had to find their way through tunnels and deep canyons, which were filled with wild animals. Nowadays, the road from Thais towards the centre of the continent runs south of the mountain and crosses the rivers on bridges. But the mineral resources of Mount Sternum still attract many adventurers.
            </p>

        </div>
    </div>
</div>
@endsection
