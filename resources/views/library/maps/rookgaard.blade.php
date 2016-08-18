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
                    <h3>Rookgaard</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Rookgaard">
                </div>

                <p>
                    Rookgaard is the name of the large island located in the Bay of Thais and also the name of the small town on it. In the past, this has been the only island with a mysterious portal through which adventurers from other worlds could enter {{ server()->name() }}. Nowadays, new adventurers misteriously land on the island Dawnport. Only from there, they can travel to Rookgaard if they have already gained enough wisdom with another character. Still, characters which come to Rookgaard may only leave this isle towards the main continent and face real dangers after training their skills and getting some experience with weak monsters and rather harmless animals. Nobody may return there later. Only some merchants and teachers reside there in order to welcome, equip, and instruct the new adventurers. Therefore, Rookgaard is also called "Newbie Isle" in the vernacular.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
