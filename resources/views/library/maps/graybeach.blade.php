@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Gray Beach</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Gray Beach">
            </div>

            <p>
                Defying the storms and impossible to reach by ship, not many travellers have laid their eyes on the Gray Beach of Quirefang. The vortexes and maelstroms around and beneath the island foil every attempt to reach its shores. First sighted by the renowned and foolhardy Captain Leviathan Gray, the island of Quirefang earned its name from its strange, tooth-like shape that protrudes from the sea like a vile fang. However, no captain ever set foot on its soil. The unpredictable streams would lead any ship directly into the offshore cliffs, marking the end of any brash sailor. Unknown to its original discoverer, the Gray Beach of Quirefang is also home to a bunch of rocks - more precisely the "Rock Boys". If you get close enough to the beach, a small gathering of stones can be seen. They are solid rocks with disconcerting, even face-like markings on them. Surely they hold the wisdom of half an eternity, if only stones could talk to pass their knowledge...
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
