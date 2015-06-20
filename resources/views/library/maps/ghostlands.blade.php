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
                <h3>Ghostlands</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Ghostlands">
            </div>

            <p>
                A dreary and barren stretch of land that has defied all attempts of cultivation over the centuries, the so-called Ghostlands have long since acquired a terrible reputation which has secured them a leading role in many a scary story. Who has not heard of the the mind-distorting illusions, the dreadful apparitions and the wandering ghosts of those who perished in this accursed land. The lucky few who have managed to return alive from there know that the rumours are true, but not even they know the full truth. For there are crypts hidden deep under the surface of the Ghostlands, long-forgotten halls and pathways that predate even the very first attempts of colonization. What's more, there are rumours of an older and even more sinister structure that is hidden somewhere deep in the earth which is said to be the source of the Ghostlands curse. But who would be foolish enough to risk both his sanity and his soul only to see whether or not the legends are true?
                <br>
                South of the ghostlands lies the isle of the ancient kings, known also as the Kings' Isle. There the rulers of the Thaian dynasties found their final resting places. Protected by the scholarly monks of the Order of the White Raven, this is a place of solitude, contemplation and learning. Only a handful of people are allowed to travel there since the reclusive monks do not welcome unwanted visitors who might have come only to look for the ancient treasure that was buried along with the deceased rulers of the Thaian lineages.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
