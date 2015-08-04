@extends('theme::app')

@title('Maps')
@navigation('/library/maps')
@bodyclass('library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Maps</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Helheim</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Helheim">
            </div>

            <p>
                Helheim is the smallest isle of the Ice Islands and is located south east of Grimlund. In the vernacular, the isle is also called "Island of the Dead." The shamans from Nibelor come here to bury their dead at sea. To perform their ritual, they put the bodies in small boats and send them in an eastward direction. Unnoticed by the shamans, some of those boats unfortunately get stuck on the coast of Helheim. Later on, these dead bodies are reawakened to an unholy life by something unknown that occurs on this mysterious island.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
