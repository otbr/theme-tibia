@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')
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
                    <h3>Roshamuul</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Roshamuul">
                </div>

                <p>
                    A landscape eerily familiar to everyone, remembered from vague dreams and nightmares. Unnerving and ever-changing, this area is home to nightmares that come true and infernal marauders.
                    <br>
                    Its dark history is shrouded in mystery, the creatures that once built it and lived there are long gone and forgotten by history. But even in the past, it was a place of dread and darkness that was ruled by fear and treachery. No stories or songs tell about its wonders and horrors any more, though. Once a thriving bastion of evil enshrouded in unsettling beauty, it has become a ruined place haunted by its gruesome past. Still, it was shielded and secured against intruders.
                    <br>
                    When the crusade of the inquisition reached its shores, the new bloody battles were only a hollow echo of the carnage Roshamuul had seen in its demise centuries if not aeons ago. Few inches of land had been won with blood and suffering but Roshamuul is no place that can truly be conquered.
                    <br>
                    The city of nightmares it used to be is no more and the seals of its infernal prisons are breaking apart. Nightmarish creatures now roam the isle, ready to shred even the most powerful adventurers into pieces, reality is weak while nightmares are strong and landscape-changing. Add some escaped, rampaging demons to this lethal mix of dangers and you get the living nightmare that Roshamuul is today. Only the most daring and most desperate travel to this island of dread.
                    <br>
                    A small remnant of the inquisition forces hold the fort with the help of some enlisted soldiers of fortune. Their base is the only thing that a traveller might find resembling a haven of civilization. But it is desperately besieged from all sides and under constant attacks.
                    <br>
                    Everything else in Roshamuul is danger, threat and shooting war. A moment of distraction might spell doom upon the explorer. And yet there are stories about lost treasures of Roshamuul's ancient creators and rumours about the strange construction called dreamcatcher that they left and which continues to draw the daring to this accursed place. Unseen challenges, untold riches and powerful artefacts are whispered to exist somewhere buried in the ghastly ruins, and their lure is just too tempting for adventurers to stay away.
                    <br>
                    So one will find either his doom or his fortune in Roshamuul but everyone will find his fate.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
