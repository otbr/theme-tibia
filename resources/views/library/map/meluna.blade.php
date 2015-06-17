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

            <div class="text-center">
                <h3>Meluna</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Meluna">
            </div>

            <p>
                Just west of Fibula, one of Tibia's most beautiful islands is situated. It is reserved for newlyweds to spend their honeymoon there. Cherry blossom trees and many beautiful flowers give Meluna a special romantic flair. The little island offers several romantic spots where newlyweds can share many good times together. In the north, couples in love can relax on the beach or have a delicious drink at the beach bar. In the middle of the island, some shop owners offer everything you need for an unforgettable honeymoon.
                <br>
                Just talk to Ferryman Kamil right after your wedding to spent memorable hours with your sweetheart on this marvellous island.
            </p>

        </div>
    </div>
</div>
@endsection
