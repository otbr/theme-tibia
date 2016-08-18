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

                <div class="text-center">
                    <h3>The Hive</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="The Hive">
                </div>

                <p>
                    A good part of Quirefang's surface is covered by a phenomenon, commonly known as 'the hive'. The hive is a conglomerate of structures that were built by diverse breeds of creatures that share a common purpose and perhaps mind. Formerly only known as 'the insectoids' and not further classified, the strange insect creatures were for a long time seen as a myth just like the yeti, the infamous Hugo or the Darkhaunt. Only recently the existence of the creatures could be confirmed. Furthermore, it was discovered that there are several quite different creatures that share characteristics, habitat and purpose with each other. The formerly rather shy and reclusive creatures have become alarmingly more open and aggressive in the known world. While they only seemed to spy on villages and humans in the past, they have begun to actively attack remote locations and small groups of travellers. The reason behind their change of behaviour is still unknown but it is widely feared that there is a guiding intelligence behind the attacks that decided that the scouting is over and is now testing the strength and vigilance of humanity. With the discovery of Quirefang, this guiding force has been more or less identified as 'the hive'. It can't be said for sure if the hive creatures are intelligent. All efforts to communicate have been ignored so far. The Hive Born kill and hunt without mercy or fear for their life. Though not all of them are formidable on their own, their determination and number makes them a new and difficult to evaluate threat.
                    <br>
                    Although technically only the two major hive structures are considered to be 'the hive' in common usage, the term describes the whole part of the isle that has been occupied by the Hive Born. The hive consists of the ichor pools in the West, the chitin pillars in the centre and the hive pyramids in the East. Despite the name, the so-called ichor pools contain substances whose purpose is entirely unknown. The area itself is somewhat less populated with the stronger hive creatures and less of a threat due to the absence of swarm holes. Whereas the function of the ichor pools is still up to speculations, the pyramid area in the East is some kind of a barracks and staging area for the hive. Here, some more dangerous creatures are encountered and a significant number of defenders of the hive can spawn in the swarm holes. The two major hive structures are protected by a wall, commonly known as the outer ward. It serves as first line of defence for the hive and has to be breached to gain access to the hive itself. When this protection fails, an invader gets to the doors of the major hive structures. The eastern one is seemingly a secondary structure and slightly less defended than the western structure. Both structures serve as a breeding area and command centre. The western structure, also called the major hive, prime hive or hive prime, has been recognised as the most important structure of the hive. It is the most fiercely defended and guarded structure. It is rumoured that the hive queens can be found here. As opposed to queens in insect states, though, they are neither unique nor something special but enormous breeding machines that the hive uses to breed new workers and armies. This leaves room for speculations about the guiding force behind the hive but even the most fierce defender of a given theory lacks any kind of substantial proof.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
