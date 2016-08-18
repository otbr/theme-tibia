@extends('theme::app')

@section('title', 'Maps')
@section('navigation', '/library/maps')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Maps</div>
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
                    <area shape="rect" coords="63,461,143,536" href="{{ url('/library/maps/rookgaard') }}">
                    <area shape="rect" coords="123,561,164,603" href="{{ url('/library/maps/fibula') }}">
                    <area shape="rect" coords="187,490,239,530" href="{{ url('/library/maps/thais') }}">

                    <area shape="rect" coords="246,519,274,546" href="{{ url('/library/maps/trollscave') }}">
                    <area shape="rect" coords="235,445,284,470" href="{{ url('/library/maps/mountsternum') }}">
                    <area shape="rect" coords="289,454,340,486" href="{{ url('/library/maps/jakundafdesert') }}">

                    <area shape="rect" coords="300,487,341,536" href="{{ url('/library/maps/outlawcamp') }}">
                    <area shape="rect" coords="348,517,398,558" href="{{ url('/library/maps/plainsofhavoc') }}">
                    <area shape="rect" coords="328,408,377,444" href="{{ url('/library/maps/greenclawswamp') }}">

                    <area shape="rect" coords="284,383,328,421" href="{{ url('/library/maps/kazordoon') }}">
                    <area shape="rect" coords="270,339,307,375" href="{{ url('/library/maps/femorhills') }}">
                    <area shape="rect" coords="391,316,443,368" href="{{ url('/library/maps/uldereksrock') }}">

                    <area shape="rect" coords="306,271,351,317" href="{{ url('/library/maps/abdendriel') }}">
                    <area shape="rect" coords="208,267,279,327" href="{{ url('/library/maps/fieldsofglory') }}">
                    <area shape="rect" coords="183,332,232,372" href="{{ url('/library/maps/carlin') }}">

                    <area shape="rect" coords="482,287,584,399" href="{{ url('/library/maps/edron') }}">
                    <area shape="rect" coords="408,435,452,480" href="{{ url('/library/maps/venore') }}">
                    <area shape="rect" coords="35,621,134,701" href="{{ url('/library/maps/forbiddenislands') }}">

                    <area shape="rect" coords="43,718,106,794" href="{{ url('/library/maps/nargor') }}">
                    <area shape="rect" coords="179,624,230,675" href="{{ url('/library/maps/meriana') }}">
                    <area shape="rect" coords="202,755,286,807" href="{{ url('/library/maps/lagunaislands') }}">

                    <area shape="rect" coords="110,764,167,804" href="{{ url('/library/maps/treasureisland') }}">
                    <area shape="rect" coords="169,717,215,759" href="{{ url('/library/maps/libertybay') }}">
                    <area shape="rect" coords="140,340,179,385" href="{{ url('/library/maps/ghostlands') }}">

                    <area shape="rect" coords="474,715,543,763" href="{{ url('/library/maps/ankrahmun') }}">
                    <area shape="rect" coords="520,571,559,609" href="{{ url('/library/maps/darashia') }}">
                    <area shape="rect" coords="282,701,336,735" href="{{ url('/library/maps/porthope') }}">

                    <area shape="rect" coords="360,614,404,656" href="{{ url('/library/maps/banuta') }}">
                    <area shape="rect" coords="410,736,449,761" href="{{ url('/library/maps/chor') }}">
                    <area shape="rect" coords="486,704,442,658" href="{{ url('/library/maps/khazeel') }}">

                    <area shape="rect" coords="320,756,374,788" href="{{ url('/library/maps/trapwood') }}">
                    <area shape="rect" coords="151,89,198,125" href="{{ url('/library/maps/svargrond') }}">
                    <area shape="rect" coords="229,72,275,103" href="{{ url('/library/maps/grimlund') }}">

                    <area shape="rect" coords="242,106,270,134" href="{{ url('/library/maps/helheim') }}">
                    <area shape="rect" coords="37,131,129,228" href="{{ url('/library/maps/barbariansettlements') }}">
                    <area shape="rect" coords="192,52,226,81" href="{{ url('/library/maps/nibelor') }}">

                    <area shape="rect" coords="129,176,196,233" href="{{ url('/library/maps/okolnir') }}">
                    <area shape="rect" coords="192,115,247,190" href="{{ url('/library/maps/tyrsung') }}">
                    <area shape="rect" coords="97,414,131,443" href="{{ url('/library/maps/islandofdestiny') }}">

                    <area shape="rect" coords="546,406,589,468" href="{{ url('/library/maps/cormaya') }}">
                    <area shape="rect" coords="265,146,297,177" href="{{ url('/library/maps/fenrock') }}">
                    <area shape="rect" coords="271,195,319,243" href="{{ url('/library/maps/mistrock') }}">

                    <area shape="rect" coords="396,219,436,275" href="{{ url('/library/maps/vengoth') }}">
                    <area shape="rect" coords="314,64,432,192" href="{{ url('/library/maps/yalahar') }}">
                    <area shape="rect" coords="90,575,119,607" href="{{ url('/library/maps/meluna') }}">

                    <area shape="rect" coords="92,546,115,569" href="{{ url('/library/maps/travora') }}">
                    <area shape="rect" coords="55,245,155,337" href="{{ url('/library/maps/southerniceislands') }}">
                    <area shape="rect" coords="463,52,496,79" href="{{ url('/library/maps/chazorai') }}">

                    <area shape="rect" coords="518,104,589,147" href="{{ url('/library/maps/muggyplains') }}">
                    <area shape="rect" coords="499,147,577,191" href="{{ url('/library/maps/dragonblazepeaks') }}">
                    <area shape="rect" coords="554,252,591,291" href="{{ url('/library/maps/zzaion') }}">

                    <area shape="rect" coords="446,237,488,271" href="{{ url('/library/maps/farmine') }}">
                    <area shape="rect" coords="132,393,157,414" href="{{ url('/library/maps/isleofthekings') }}">
                    <area shape="rect" coords="363,259,396,285" href="{{ url('/library/maps/draconia') }}">

                    <area shape="rect" coords="326,211,370,243" href="{{ url('/library/maps/isleofevil') }}">
                    <area shape="rect" coords="43,418,87,463" href="{{ url('/library/maps/templeoflight') }}">
                    <area shape="rect" coords="502,56,590,109" href="{{ url('/library/maps/northernzao') }}">

                    <area shape="rect" coords="458,80,504,162" href="{{ url('/library/maps/razachai') }}">
                    <area shape="rect" coords="640,105,690,165" href="{{ url('/library/maps/hive') }}">
                    <area shape="rect" coords="606,166,635,190" href="{{ url('/library/maps/graybeach') }}">

                    <area shape="rect" coords="615,115,690,190" href="{{ url('/library/maps/fiehonja') }}">
                    <area shape="rect" coords="631,521,726,644" href="{{ url('/library/maps/roshamuul') }}">
                    <area shape="rect" coords="644,398,707,433" href="{{ url('/library/maps/rathleton') }}">

                    <area shape="rect" coords="634,353,731,459" href="{{ url('/library/maps/oramond') }}">
                    <area shape="rect" coords="84,368,124,408" href="{{ url('/library/maps/dawnport') }}">
                </map>

                <div style="max-width: 659px; margin: 0 auto;">
                    <img src="{{ cdn('maps', ['map' => '_small']) }}" usemap="#map_small" class="map-small" width="762" height="840">
                </div>

                <div class="download-small-map">
                    <a href="{{ cdn('maps', ['map' => '_big']) }}" target="_blank">[Download high resolution map (5 MB)]</a>
                </div>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
