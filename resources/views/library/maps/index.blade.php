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

            <div class="top-text">
                The world of {{ server()->name() }} is separated in two continents and several islands. Please click on a link or on a part of the map below to learn more about the different areas.
            </div>

            <div class="block">
                <div class="title">Main Continent:</div>
                <li>
                    Cities: 
                    <a href="{{ url('/library/maps/abdendriel') }}">Ab'Dendriel</a>, 
                    <a href="{{ url('/library/maps/carlin') }}">Carlin</a>, 
                    <a href="{{ url('/library/maps/kazordoon') }}">Kazordoon</a>, 
                    <a href="{{ url('/library/maps/thais') }}">Thais</a> and 
                    <a href="{{ url('/library/maps/venore') }}">Venore</a><br>
                
                    Northern Wilderness: 
                    <a href="{{ url('/library/maps/femorhills') }}">Femor Hills</a>, 
                    <a href="{{ url('/library/maps/fieldsofglory') }}">Fields of Glory</a>, 
                    <a href="{{ url('/library/maps/ghostlands') }}">Ghostlands</a> and 
                    <a href="{{ url('/library/maps/uldereksrock') }}">Ulderek's Rock</a><br>

                    Southern Wilderness: 
                    <a href="{{ url('/library/maps/greenclawswamp') }}">Green Claw Swamp</a>, 
                    <a href="{{ url('/library/maps/jakundafdesert') }}">Jakundaf Desert</a>, 
                    <a href="{{ url('/library/maps/mountsternum') }}">Mount Sternum</a>, 
                    <a href="{{ url('/library/maps/outlawcamp') }}">Outlaw Camp</a>,<br> 
                    <a href="{{ url('/library/maps/plainsofhavoc') }}">Plains of Havoc</a> and 
                    <a href="{{ url('/library/maps/trollscave') }}">Trolls' Cave</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Darama:</div>
                <li>
                    Cities: 
                    <a href="{{ url('/library/maps/ankrahmun') }}">Ankrahmun</a>, 
                    <a href="{{ url('/library/maps/darashia') }}">Darashia</a> and 
                    <a href="{{ url('/library/maps/porthope') }}">Port Hope</a><br>

                    Wilderness: 
                    <a href="{{ url('/library/maps/banuta') }}">Banuta</a>, 
                    <a href="{{ url('/library/maps/chor') }}">Chor</a>, 
                    <a href="{{ url('/library/maps/khazeel') }}">Kha'zeel</a> and 
                    <a href="{{ url('/library/maps/trapwood') }}">Trapwood</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Shattered Isles:</div>
                <li>
                    City: 
                    <a href="{{ url('/library/maps/libertybay') }}">Liberty Bay</a><br>

                    Isles: 
                    <a href="{{ url('/library/maps/forbiddenislands') }}">Forbidden Islands</a>, 
                    <a href="{{ url('/library/maps/lagunaislands') }}">Laguna Islands</a>, 
                    <a href="{{ url('/library/maps/meriana') }}">Meriana</a>, 
                    <a href="{{ url('/library/maps/nargor') }}">Nargor</a> and 
                    <a href="{{ url('/library/maps/treasureisland') }}">Treasure Island</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Ice Islands:</div>
                <li>
                    City: 
                    <a href="{{ url('/library/maps/svargrond') }}">Svargrond</a><br>
                
                    Isles: 
                    <a href="{{ url('/library/maps/barbariansettlements') }}">Barbarian Settlements</a>, 
                    <a href="{{ url('/library/maps/grimlund') }}">Grimlund</a>, 
                    <a href="{{ url('/library/maps/helheim') }}">Helheim</a>, 
                    <a href="{{ url('/library/maps/nibelor') }}">Nibelor</a>, 
                    <a href="{{ url('/library/maps/okolnir') }}">Okolnir</a>, 
                    <a href="{{ url('/library/maps/southerniceislands') }}">Southern Ice Islands</a> and 
                    <a href="{{ url('/library/maps/tyrsung') }}">Tyrsung</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Zao:</div>
                <li>
                    <a href="{{ url('/library/maps/chazorai') }}">Chazorai</a>, 
                    <a href="{{ url('/library/maps/dragonblazepeaks') }}">Dragonblaze Peaks</a>, 
                    <a href="{{ url('/library/maps/farmine') }}">Farmine</a>, 
                    <a href="{{ url('/library/maps/muggyplains') }}">Muggy Plains</a>, 
                    <a href="{{ url('/library/maps/northernzao') }}">Northern Zao</a>, 
                    <a href="{{ url('/library/maps/razachai') }}">Razachai</a>, 
                    <a href="{{ url('/library/maps/vengoth') }}">Vengoth</a> and 
                    <a href="{{ url('/library/maps/zzaion') }}">Zzaion</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Quirefang:</div>
                <li>
                    <a href="{{ url('/library/maps/fiehonja') }}">Fiehonja</a>, 
                    <a href="{{ url('/library/maps/graybeach') }}">Gray Beach</a> and 
                    <a href="{{ url('/library/maps/hive') }}">The Hive</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Oramond:</div>
                <li>
                    City: 
                    <a href="{{ url('/library/maps/rathleton') }}">Rathleton</a><br>

                    Island: 
                    <a href="{{ url('/library/maps/oramond') }}">Oramond</a>
                </li>
            </div>

            <div class="block">
                <div class="title">Islands:</div>
                <li>
                    <a href="{{ url('/library/maps/cormaya') }}">Cormaya</a>, 
                    <a href="{{ url('/library/maps/dawnport') }}">Dawnport</a>, 
                    <a href="{{ url('/library/maps/draconia') }}">Draconia</a>, 
                    <a href="{{ url('/library/maps/edron') }}">Edron</a>, 
                    <a href="{{ url('/library/maps/fenrock') }}">Fenrock</a>, 
                    <a href="{{ url('/library/maps/fibula') }}">Fibula</a>, 
                    <a href="{{ url('/library/maps/islandofdestiny') }}">Island of Destiny</a>, 
                    <a href="{{ url('/library/maps/isleofevil') }}">Isle of Evil</a>, 
                    <a href="{{ url('/library/maps/isleofthekings') }}">Isle of the Kings</a>, 
                    <a href="{{ url('/library/maps/meluna') }}">Meluna</a>, 
                    <a href="{{ url('/library/maps/mistrock') }}">Mistrock</a>, 
                    <a href="{{ url('/library/maps/rookgaard') }}">Rookgaard</a>, 
                    <a href="{{ url('/library/maps/roshamuul') }}">Roshamuul</a>, 
                    <a href="{{ url('/library/maps/templeoflight') }}">Temple of Light</a>, 
                    <a href="{{ url('/library/maps/travora') }}">Travora</a> and 
                    <a href="{{ url('/library/maps/yalahar') }}">Yalahar</a>
                </li>
            </div>

            <br>
            <br>

            <map name="map_small">
                <area shape="rect" coords="48,408,143,493" href="{{ url('/library/maps/rookgaard') }}">
                <area shape="rect" coords="102,502,160,553" href="{{ url('/library/maps/fibula') }}">
                <area shape="rect" coords="162,430,221,488" href="{{ url('/library/maps/thais') }}">
                <area shape="rect" coords="221,463,255,497" href="{{ url('/library/maps/trollscave') }}">
                <area shape="rect" coords="216,399,260,430" href="{{ url('/library/maps/mountsternum') }}">
                <area shape="rect" coords="260,407,311,444" href="{{ url('/library/maps/jakundafdesert') }}">
                <area shape="rect" coords="272,444,312,471" href="{{ url('/library/maps/outlawcamp') }}">
                <area shape="rect" coords="317,464,371,515" href="{{ url('/library/maps/plainsofhavoc') }}">
                <area shape="rect" coords="301,363,358,400" href="{{ url('/library/maps/greenclawswamp') }}">
                <area shape="rect" coords="253,343,301,387" href="{{ url('/library/maps/kazordoon') }}">
                <area shape="rect" coords="240,303,284,343" href="{{ url('/library/maps/femorhills') }}">
                <area shape="rect" coords="356,290,414,337" href="{{ url('/library/maps/uldereksrock') }}">
                <area shape="rect" coords="262,240,327,294" href="{{ url('/library/maps/abdendriel') }}">
                <area shape="rect" coords="181,243,248,298" href="{{ url('/library/maps/fieldsofglory') }}">
                <area shape="rect" coords="164,298,215,342" href="{{ url('/library/maps/carlin') }}">
                <area shape="rect" coords="427,251,535,369" href="{{ url('/library/maps/edron') }}">
                <area shape="rect" coords="359,383,420,447" href="{{ url('/library/maps/venore') }}">
                <area shape="rect" coords="20,553,134,644" href="{{ url('/library/maps/forbiddenislands') }}">
                <area shape="rect" coords="25,643,103,727" href="{{ url('/library/maps/nargor') }}">
                <area shape="rect" coords="155,556,215,612" href="{{ url('/library/maps/meriana') }}">
                <area shape="rect" coords="178,675,262,735" href="{{ url('/library/maps/lagunaislands') }}">
                <area shape="rect" coords="97,686,148,731" href="{{ url('/library/maps/treasureisland') }}">
                <area shape="rect" coords="152,641,198,695" href="{{ url('/library/maps/libertybay') }}">
                <area shape="rect" coords="122,307,165,349" href="{{ url('/library/maps/ghostlands') }}">
                <area shape="rect" coords="417,629,501,697" href="{{ url('/library/maps/ankrahmun') }}">
                <area shape="rect" coords="466,513,517,556" href="{{ url('/library/maps/darashia') }}">
                <area shape="rect" coords="245,626,304,667" href="{{ url('/library/maps/porthope') }}">
                <area shape="rect" coords="323,544,367,591" href="{{ url('/library/maps/banuta') }}">
                <area shape="rect" coords="365,660,414,693" href="{{ url('/library/maps/chor') }}">
                <area shape="rect" coords="392,568,448,638" href="{{ url('/library/maps/khazeel') }}">
                <area shape="rect" coords="269,679,322,724" href="{{ url('/library/maps/trapwood') }}">
                <area shape="rect" coords="134,79,194,118" href="{{ url('/library/maps/svargrond') }}">
                <area shape="rect" coords="203,64,244,94" href="{{ url('/library/maps/grimlund') }}">
                <area shape="rect" coords="215,91,250,126" href="{{ url('/library/maps/helheim') }}">
                <area shape="rect" coords="36,113,126,203" href="{{ url('/library/maps/barbariansettlements') }}">
                <area shape="rect" coords="173,50,209,81" href="{{ url('/library/maps/nibelor') }}">
                <area shape="rect" coords="117,154,179,210" href="{{ url('/library/maps/okolnir') }}">
                <area shape="rect" coords="173,97,229,175" href="{{ url('/library/maps/tyrsung') }}">
                <area shape="rect" coords="87,370,118,403" href="{{ url('/library/maps/islandofdestiny') }}">
                <area shape="rect" coords="487,363,542,414" href="{{ url('/library/maps/cormaya') }}">
                <area shape="rect" coords="238,131,268,163" href="{{ url('/library/maps/fenrock') }}">
                <area shape="rect" coords="237,172,296,221" href="{{ url('/library/maps/mistrock') }}">
                <area shape="rect" coords="358,199,400,245" href="{{ url('/library/maps/vengoth') }}">
                <area shape="rect" coords="274,45,406,180" href="{{ url('/library/maps/yalahar') }}">
                <area shape="rect" coords="83,520,109,549" href="{{ url('/library/maps/meluna') }}">
                <area shape="rect" coords="84,496,103,514" href="{{ url('/library/maps/travora') }}">
                <area shape="rect" coords="45,222,143,310" href="{{ url('/library/maps/southerniceislands') }}">
                <area shape="rect" coords="419,45,454,74" href="{{ url('/library/maps/chazorai') }}">
                <area shape="rect" coords="460,75,536,135" href="{{ url('/library/maps/muggyplains') }}">
                <area shape="rect" coords="446,133,525,176" href="{{ url('/library/maps/dragonblazepeaks') }}">
                <area shape="rect" coords="495,215,534,262" href="{{ url('/library/maps/zzaion') }}">
                <area shape="rect" coords="403,217,428,241" href="{{ url('/library/maps/farmine') }}">
                <area shape="rect" coords="121,356,140,376" href="{{ url('/library/maps/isleofthekings') }}">
                <area shape="rect" coords="330,232,353,260" href="{{ url('/library/maps/draconia') }}">
                <area shape="rect" coords="292,188,335,222" href="{{ url('/library/maps/isleofevil') }}">
                <area shape="rect" coords="39,377,81,422" href="{{ url('/library/maps/templeoflight') }}">
                <area shape="rect" coords="449,50,524,111" href="{{ url('/library/maps/northernzao') }}">
                <area shape="rect" coords="405,69,458,147" href="{{ url('/library/maps/razachai') }}">
                <area shape="rect" coords="559,101,621,175" href="{{ url('/library/maps/hive') }}">
                <area shape="rect" coords="547,97,627,177" href="{{ url('/library/maps/fiehonja') }}">
                <area shape="rect" coords="553,145,590,173" href="{{ url('/library/maps/graybeach') }}">
                <area shape="rect" coords="569,472,664,585" href="{{ url('/library/maps/roshamuul') }}">
                <area shape="rect" coords="557,302,667,415" href="{{ url('/library/maps/oramond') }}">
                <area shape="rect" coords="589,345,638,388" href="{{ url('/library/maps/rathleton') }}">
                <area shape="rect" coords="72,333,113,371" href="{{ url('/library/maps/dawnport') }}">
            </map>

            <img src="{{ config('pandaac.theme-tibia.paths.maps') }}/_small.jpg" usemap="#map_small" class="map-small" width="659" height="762">

            <div class="download-small-map">
                <a href="{{ config('pandaac.theme-tibia.paths.maps') }}/_big.jpg" target="_blank">[Download high resolution map (5 MB)]</a>
            </div>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
