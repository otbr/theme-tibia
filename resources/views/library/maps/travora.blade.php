@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')
@section('navigation', '/library/maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Travora</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Travora">
            </div>

            <p>
                South of Rookgaard, adventurers can find a small but important island - Travora is the gate to other worlds. All characters that want to move to another game world need to travel to Travora to get ready for departure.
                <br>
                To travel to Travora you need to go by ship. The ticket costs 1,000 gold coins, is valid for 24 hours and can also be purchased by free account players. You can travel from every city with this ticket to Travora. However, if you want to return from Travora, you can only travel to the city from which you had travelled last there. The island offers a bank, a post office, a mailbox and a depot. Everything that is stored in your depot on Travora will be moved together with your character to the new game world.
                <br>
                If you have decided to leave a game world and started the transfer on your account page, you should talk to NPC Sharon who will help you to get prepared for your journey to a new exciting world.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
