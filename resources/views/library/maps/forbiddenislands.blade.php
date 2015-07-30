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
                <h3>Forbidden Islands</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Forbidden Islands">
            </div>

            <p>
                North west of the island Vandura, the dangerous Forbidden Islands are located. The archipelago consists of five small islands called Goroma, Ramoa, Malada, Talahu and Kharos. Goroma, the largest of the islands, is known for the large volcano that rises in its middle. Members of some strange voodoo cult, that believe that a fire demon has its home in this volcano, seem to have founded a base there. Like on all isles of this archipelago the ground is hard and dry there. A few withered plants and some dead branches is all that is left from a formerly rich vegetation. Only on Malada, the most southern of these islands, a few swampy spots serve to cool the skins of the ominous quara on their occasional land excursions.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
