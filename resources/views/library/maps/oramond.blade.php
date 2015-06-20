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
                <h3>Oramond</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Oramond">
            </div>

            <p>
                For a long time, the isle of Oramond was surrounded by impenetrable mist and a sea full of treacherous reefs. It still has a long history which is bound to that of the continent in many mysterious ways. The past contacts with the continent have brought both good and bad to the isle and significantly shaped its past. The renewed contact is likely to shape its future.
                <br>
                After the mists have parted and long forgotten passages have been re-established, a curious world casts an eye on the foreign wonders of Oramond and its human settlement - the city of Rathleton. The isle itself is rugged and offers only little inhabitable space and natural resources. Only through exploitation of the small and unassuming glooth-worms, the inhabitants managed to survive and even built a prospering civilization on their own.
                <br>
                While fearsome creatures roam the plains, the mountains and even the dark caves beneath, in the south-west, a powerful minotaur tribe has settled and seems dedicated to stay.
                <br>
                Oramond is surely no place for the flimsy or ill-prepared, but it is full of wonders and adventures.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
