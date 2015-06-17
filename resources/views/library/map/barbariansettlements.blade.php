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
                <h3>Barbarian Settlements</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Barbarian Settlements">
            </div>

            <p>
                Hrodmir, the largest isle of the Ice Islands, is the home for many barbarians. A number of them accepted the civilised life in the city Svargond. However, many others live in settlements located to the south. Ragnir, Bittermor and Krimhorn have become the home of those barbarians who prefer to keep their nomadic life. Bordering these 3 settlements, the glacier Formorgar hosts countless animals like mammoths and polar bears and dangerous and fierce creatures such as ice golems and crystal spiders. Deep under the glacier, a strange cult has set up their camp in an old mine. It is rumoured that they are melting ancient demons there, hoping to be able to conjure a mighty archdemon one day.
            </p>

        </div>
    </div>
</div>
@endsection
