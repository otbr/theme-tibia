@extends('theme::app')

@title('Genesis')
@navigation('/library/genesis')
@bodyclass('library-genesis')

@section('head')
    <link href="http://fonts.googleapis.com/css?family=Martel" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-genesis.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h1>{{ server()->name() }}'s Renewal</h1>

            <p class="first-letter">Finally, Banor again turned to the gods to help him, and they answered his prayers. Again it was the ever-resourceful Uman who had found a solution, a solution that was possible because he had made a most amazing discovery: He had found that beyond the very fabric of existence there were other dimensions, far-away planes in which even the elder gods held no power. However, Uman had found a way to establish a connection to these alternative planes of existence, and after much experimenting he had learnt that it was possible to conjure souls of living creatures from these planes. When brought to {{ server()->name() }} these souls could be turned into human shape, forming the champions the human race desperately needed. This, then, was the answer to the human's problems, and it was swiftly put into practice. The gods planted a number of magical gates on {{ server()->name() }}, gates that were soon referred to as Portals of Souls. Through these gates a steady flow of heroes came into the world, human warriors that were both cunning and brave, and with the aid of these champions the abominable hordes were slowly but surely pushed back. At long last it looked as though the order would be restored.</p>

            <div class="text-center">
                <img src="{{ asset('/pandaac/theme-tibia/img/genesis7.jpg') }}" alt="Genesis">
            </div>

            <p class="first-letter">Things looked brighter for the human race than they had done in a long time. The allied powers of heroes and humans advanced further and further into the enemy's territory, and the dark hordes seemed to stand on the verge of utter defeat. But alas! Those who believed that the old races would now be wiped from the face of {{ server()->name() }} for good were a little hasty, because something unexpected happened. Faced with the seemingly overwhelming might of the human armies the old races did what for aeons had been unthinkable: They signed a truce. Dragons, orcs, undead and all those other races that had fought amongst themselves for so long suddenly stopped attacking each other and concentrated on their war against the human race. And so it came to pass that again things took a turn for the worse. Even though their enemies did not trust each other enough to form any alliance worth mentioning, the sheer fact that they stopped fighting amongst each other brought the human race into a very precarious position. Soon their advance was brought to halt, and once more they were forced onto the defensive.</p>

            <p class="first-letter">The human armies decided to withdraw to their fortified cities to resume the war there, but again they made a surprising discovery. For this time, the very first time in recorded history, the enemies of the humans did not rush after them to take up the fight. Many were puzzled by this, as it was not readily apparent why the hordes acted this way. A common theory was the tensions and the mutual distrust between the old races was too strong for them to combine their forces in a sustained campaign, and some even claimed that they had started waging war against each other once more. Others suggested that the old races had exhausted themselves in the course of the many wars, while still others hinted that perhaps an equilibrium had been reached, a status quo which all sides felt they could live with. Whatever the reason, a period of restless but fundamentally stable peace ensued, and it lasts to this day. For the very first time the troubled world has a reprieve from the ceaseless slaughter which troubled it for aeons.</p>

            <p class="first-letter">The humans have availed themselves well of this opportunity. Under the wise guidance of the Thaian kings, who were direct descendants of Banor, the race is living through a golden age. The arts and the sciences prosper, and many a thriving city has been founded. To be sure, the humans' expansion has met with fierce resistance, and in fact the dauntless heroes who still enter this world from the mysterious Portals of Souls are busy enough to fight the constant threat posed by all kinds of hostile creatures. But so far the peace has lasted, and under its protection the human race has finally asserted itself as the dominant species in {{ server()->name() }}. However, there are disquieting signs that this glorious era might slowly come to its end. For the old enemies have never been vanquished, and now it seems that they are growing increasingly restless. The fierce orcs are stirring once more, attacking human settlements and sometimes even major cities in vicious, well-coordinated attacks. The undead have again started to walk the land, striking fear into the hearts of the living. There are even disconcerting reports that the fearsome dragons who have lain dormant for centuries are again leaving their hidden lairs to prey. Worst of all, the humans, that curious race, have started bickering amongst themselves, and more than once tensions have led to armed conflicts. In the course of time, some humans even renounced the Thaian kings' rule and founded own cities and empires.</p>

            <p class="first-letter">It may be that this is yet another one of Zathroth's wicked ploys. It is well known that his most diabolic minions, the gruesome demons, are lurking in the shadows, biding their time. Who knows - perhaps {{ server()->name() }} is on the brink of another cataclysmic war, and a new twilight will fall on the world. Fate alone knows what the future has in store for {{ server()->name() }}. Let us all hope and pray that the humans' unity will not break just when it is needed most.</p>

            <p class="text-center">
                <big>Chapter VI: <a href="{{ url('/library/genesis/6') }}">The Creation of the Humans</a></big>
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
