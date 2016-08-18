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
                    <h3>Nibelor</h3>

                    <img class="border" src="{{ cdn('maps', ['map' => $area]) }}" alt="Nibelor">
                </div>

                <p>
                    Located to the north east of Hrodmir, the small island Nibelor has become the retreat for some shamans and druids of Svargrond. From here, they watch about the incidences of Hrodmir and the other Ice Islands. With the help of spells, they try to prevent the conjuration of the archdemon in the mines. Not only this cult creates problems, the normally peaceful shamans are also disgusted by the Venorean hunters on Tyrsung who chase the animals living there. The shamans which are very close to nature abominate the slaughtering of animals and though they try everything to sabotage the hunters, even if this means to use adventurous strangers for this task.
                </p>

            </div>
        </div>
        
        <span class="corners bottom"></span>
    </div>

@stop
