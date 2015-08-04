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
                <h3>Zzaion</h3>

                <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Zzaion">
            </div>

            <p>
                Once a highly-developed lizards culture ruled over the whole continent Zao. For a long time they defended their land against barbaric orcs, minotaurs, and humans. But finally the day came on which the lizards were simply overwhelmed by the sheer number of the attackers. The tide turned in the lizards' favour again when they got unexpected help from some dragons who were in search for a new home. However, the dragons soon turned from allies to masters and became the rulers of Zao using the lizards as mere servants. Having suffered great losses from the war, both dragons and lizards retreated to the northern Zao region and left the steppe to the orcish hordes - for now. Zzaion is the last lizard stronghold in the South, however, again and again the city suffers from attacks of the orcish hordes. Until now, the lizards have always succeeded in defeating their territory against the intruders.
                <br>
                Against all odds, Zzaion is still a very beautiful city with an exotic architecture that still hints at the sophisticated nature of the lizards of the past.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
