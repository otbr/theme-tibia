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
                <h3>Edron</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Edron">
            </div>

            <p>
                Edron is a large, crescent-scaped island, located east of the Tibian continent. Seafarers of Thais detected it only some years ago, and erected a town of the same name. Only a part of the island has been explored already, but rich mineral resources are expected in the mountains. Therefore, King Tibianus III of Thais supports this colony strongly and encourages his subjects to move there. Some of the best magicians, which sought the isolation and healthy climate of this isle, were among the first settlers. They built seven ivory towers, where they performed their studies, and actually succeeded in developing several new spells. But Edron offers still more, e.g. so far unknown monster races ...
            </p>

        </div>
    </div>
</div>
@endsection
