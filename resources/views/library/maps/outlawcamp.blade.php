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
                <h3>Outlaw Camp</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Outlaw Camp">
            </div>

            <p>
                East of the Blood Bay outlaws and deserters of the king's army have erected a hideout. The place suits their needs very well. It is surrounded by water on nearly all sides. A dense forest hides the camp and makes it impossible to attack it with armies. The houses are built out of wood, but the whole village is well fortified. Being sly and experienced fighters the inhabitants defend their shabby and dirty dwellings fiercely against any uninvited intruder. On the other hand, they don't hesitate to support other outlaws or even to put them up in their camp.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
