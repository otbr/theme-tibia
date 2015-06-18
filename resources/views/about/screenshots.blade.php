@extends('theme::app')

@section('title', 'Screenshots')
@section('body', 'about-screenshots')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-screenshots.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p class="text-center">Click on an image to enlarge the screenshot!</p>

        </div>
    </div>
</div>
@endsection
