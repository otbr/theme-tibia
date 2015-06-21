@extends('theme::app')

@title('Achievements')
@navigation('/library/achievements')
@bodyclass('library-achievements')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-achievements.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>...</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
