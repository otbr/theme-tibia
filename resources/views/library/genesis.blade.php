@extends('theme::app')

@title('Genesis')
@navigation('/library/genesis')
@bodyclass('library-genesis')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-genesis.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>...</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
