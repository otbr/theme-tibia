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

            <div class="top-text">
                The world of Tibia is separated in two continents and several islands. Please click on a link or on a part of the map below to learn more about the different areas.
            </div>

            <div class="block">
                <div class="title">Main Continent:</div>
                <li>Cities: <a href="#">Ab'Dendriel</a>, <a href="#">Carlin</a>, <a href="#">Kazordoon</a>, <a href="#">Thais</a> and <a href="#">Venore</a><br>
                Northern Wilderness: <a href="#">Femor Hills</a>, <a href="#">Fields of Glory</a>, <a href="#">Ghostlands</a> and <a href="#">Ulderek's Rock</a><br>
                Southern Wilderness: <a href="#">Green Claw Swamp</a>, <a href="#">Jakundaf Desert</a>, <a href="#">Mount Sternum</a>, <a href="#">Outlaw Camp</a>,<br> <a href="#">Plains of Havoc</a> and <a href="#">Trolls' Cave</a></li>
            </div>

            <div class="block">
                <div class="title">Darama:</div>
                <li>Cities: <a href="#">Ankrahmun</a>, <a href="#">Darashia</a> and <a href="#">Port Hope</a><br>
                Wilderness: <a href="#">Banuta</a>, <a href="#">Chor</a>, <a href="#">Kha'zeel</a> and <a href="#">Trapwood</a></li>
            </div>

            <div class="block">
                <div class="title">Shattered Isles:</div>
                <li>City: <a href="#">Liberty Bay</a><br>
                Isles: <a href="#">Forbidden Islands</a>, <a href="#">Laguna Islands</a>, <a href="#">Meriana</a>, <a href="#">Nargor</a> and <a href="#">Treasure Island</a></li>
            </div>

            <div class="block">
                <div class="title">Ice Islands:</div>
                <li>City: <a href="#">Svargrond</a><br>
                Isles: <a href="#">Barbarian Settlements</a>, <a href="#">Grimlund</a>, <a href="#">Helheim</a>, <a href="#">Nibelor</a>, <a href="#">Okolnir</a>, <a href="#">Southern Ice Islands</a> and <a href="#">Tyrsung</a></li>
            </div>

            <div class="block">
                <div class="title">Zao:</div>
                <li><a href="#">Chazorai</a>, <a href="#">Dragonblaze Peaks</a>, <a href="#">Farmine</a>, <a href="#">Muggy Plains</a>, <a href="#">Northern Zao</a>, <a href="#">Razachai</a>, <a href="#">Vengoth</a> and <a href="#">Zzaion</a></li>
            </div>

            <div class="block">
                <div class="title">Quirefang:</div>
                <li><a href="#">Fiehonja</a>, <a href="#">Gray Beach</a> and <a href="#">The Hive</a></li>
            </div>

            <div class="block">
                <div class="title">Oramond:</div>
                <li>City: <a href="#">Rathleton</a><br>
                Island: <a href="#">Oramond</a></li>
            </div>

            <div class="block">
                <div class="title">Islands:</div>
                <li><a href="#">Cormaya</a>, <a href="#">Dawnport</a>, <a href="#">Draconia</a>, <a href="#">Edron</a>, <a href="#">Fenrock</a>, <a href="#">Fibula</a>, <a href="#">Island of Destiny</a>, <a href="#">Isle of Evil</a>, <a href="#">Isle of the Kings</a>, <a href="#">Meluna</a>, <a href="#">Mistrock</a>, <a href="#">Rookgaard</a>, <a href="#">Roshamuul</a>, <a href="#">Temple of Light</a>, <a href="#">Travora</a>, and <a href="#">Yalahar</a></li>
            </div>

            <img src="{{ asset('pandaac\theme-tibia\img\maps\map_small.jpg') }}" class="map-small">

            <div class="download-small-map"><a href="#">[Download high resolution map (5 MB)]</a></div>

        </div>
    </div>
</div>
@endsection
