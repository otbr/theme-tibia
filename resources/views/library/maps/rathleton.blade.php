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
                    <h3>Rathleton</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Rathleton">
                </div>

                <p>
                    The busy town of Rathleton is the centre of human society on Oramond. Rathleton is the home of a tough breed of humans. Their culture and technology has evolved separately from other realms and produced something similar but astonishingly different from what travellers of other realms are accustomed to. The miraculous glooth, won from unassuming, tiny glooth-worms, is the source of the city's wealth and progress. Almost all of Rathleton's amazing discoveries and inventions are based on this curious substance.
                    <br>
                    After a tumultuous and troubled past, Rathleton has settled on a otherwise unseen ruling system. Not a king rules over the city and the land but a magistrate, who is bound to the decisions of the worthy citizens, who vote on the magistrate's decisions via an elaborate voting system.
                    <br>
                    Dangers are numerous and constantly threatening the civilization of Rathleton. Not only strange spiritual energy produces horrors formerly unknown to the world, but also a renegade tribe of minotaurs has made its subterranean way to Oramond and is determined to carve a realm of its own. Besieged by the minotaurs and local monsters while facing the everyday hardships of survival in a hostile environment, the people of Rathleton are always eager to accept help and to integrate foreigners into their society.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
