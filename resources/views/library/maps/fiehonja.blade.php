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
                <h3>Fiehonja</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Fiehonja">
            </div>

            <p>
                Beneath the surface of Quirefang lies the realm of the Deeplings. The cliffs and heaps underwater are a unique world in itself. The same strong maelstroms that make it practically impossible for any ship to land on the island, dominate the area under its surface. The creatures of the deep have come accustomed to their harsh surroundings. Its dominating inhabitants, the Deeplings, are impressive swimmers but also firm walkers on Fiehonja's seabed. Deep down in the blackness that is the depth of the {{ server()->name() }} seas lies the heart of the Njey culture. Shrouded in algae and bathed for ages by water flowing by, the temples and cities of the Deeplings rebel against the streams like the last bastion in a long lost war.
                <br>
                The centre of the Njey culture was once their inspiring collection of knowledge and wisdom, the books and tomes of the Drowned Library. This long abandoned marvel is now host to the more magic focused troops massing in the deep. The inner sanctum of the forsaken city is testament to the God King of all Njey. An enormous statue bearing the likeness of Qjell himself crowns the Apex of Worship that functions as a hub between each subsection of Fiehonja. It is from there that Qjell's workers and the lower castes can reach the bed chambers of their spawn to tend to their offspring.
                <br>
                The vast caves of Fiehonja are extremely inhospitable for all but the most adaptable sea creatures. Some are filled with sulphur or suffer from dangerous underwater eruptions, others are unstable or filled with swarms of sharks and manta rays. A considerable part of the area is used for mining. The Njey are known to cut the finest gems and to be sturdy miners of coral they use to construct staggering architecture. The outer rim of these black depths are home of the Ancestral Grounds. A forsaken resting place of long gone Njey heroes and the only connection to the outer caves which also contain the "pits". The pits are the place where the rogue guardians of Qjell are gathering and training their warriors. Reaching these concealed chambers, however, is a most daunting task that would require the combined effort of all those worthy to defy these ancient evils.
            </p>

        </div>
    </div>
</div>
@endsection
