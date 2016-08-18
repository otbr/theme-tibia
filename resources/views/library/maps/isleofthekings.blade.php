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
                    <h3>Isle of the Kings</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Isle of the Kings">
                </div>

                <p>
                    The Isle of the Kings is the ancient burial ground of the Thaian nobility. Having shared roots in Carlin and Thais, the isle's ground is considered neutral territory. Over the years, the small order of monks that guards the solemn isle has formed the order of the White Raven and built a monastery of the same name. This monastery oversees the burial sites and the safety of the tombs. Over the decades, the reclusive monks have amassed a wealth of knowledge in the form of books from all sources, but only rarely a traveller finds his way onto this isle.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
