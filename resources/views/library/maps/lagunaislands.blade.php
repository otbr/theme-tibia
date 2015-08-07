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
                    <h3>Laguna Islands</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Laguna Islands">
                </div>

                <p>
                    In the south-eastern part of the Shattered Isles, adventurers can visit the Laguna Islands. Palm trees and banana plants grow plenty on the 3 idyllic isles. Long sandy beaches and crystal clear water invite to a sunbath. But watch out, the archipelago has also a rich wildlife. Not all creatures are as harmless as the cackling seagulls. Many a shipwrecked sailor has been attacked by innocent-looking amphibians such as multi-coloured frogs or slimy toads.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
