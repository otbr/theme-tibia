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
                <h3>Isle of Evil</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Isle of Evil">
            </div>

            <p>
                South of Yalahar, the mysterious Isle of Evil sticks out of the ocean. There are many rumours about this isle, but any attempts to gather more hints only led to some securely sealed files with the title "Classified Information".
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection
