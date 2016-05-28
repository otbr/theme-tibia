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
                    <h3>Svargrond</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Svargrond">
                </div>

                <p>
                    Situated on Hrodmir, the largest isle of the Ice Islands, Svargrond is for sure the coldest city in whole {{ server()->name() }}. There are people of 2 different backgrounds living in this chilly settlement. There are the barbarians, natives who have been in this area for a very long time, and there are settlers that originate from Carlin. Their ancestors once came here to dig for valuable ores in the close-by mines and founded a small settlement. Today, it is inhabited by natives and Carliners alike and has developed into a prospering city. It is characterised by a unique, rustic style with long blockhouses. The wealthier inhabitants of Svargrond live in large houses decorated with various ornaments. Many people, however, earn their living as fishermen or furriers. They live in cosy huts in separated quarters to the south.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
