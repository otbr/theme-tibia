@extends('theme::app')

@section('title', 'Spells')
@section('body', 'library-spells')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-spells.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>Here you can see the list of all available spells in Tibia. Click on any spell name to get detailed information. Please adjust the search criteria below if you want to see just certain spells. Also, you can sort the spell list by any column of your choice.</p>

        </div>
    </div>
</div>
@endsection
