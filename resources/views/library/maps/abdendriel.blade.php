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
                    <h3>Ab'Dendriel</h3>

                    <img class="border" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Ab'Dendriel">
                </div>

                <p>
                    After roaming the whole continent for centuries, the elves settled in this area of luxuriant vegetation in the north of {{ server()->name() }}. They built their houses in and out of trees - most houses are actually located high above the ground in tree-tops and connected via bridges - and named their village "Ab'Dendriel" after the ancient word "déndron", which means "tree". Elves are also called "tree-singers", because they are able to enchant plants by singing. You can find many examples of this art there. But the idyll is deceptive. Below the surface horrible creatures are lurking for incautious adventurers and the pyramid on the isle off the coast is filled with undead monsters.
                </p>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
