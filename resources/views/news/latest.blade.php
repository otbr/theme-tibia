@extends('theme::app')

@section('title', 'News')
@section('body', 'news-latest')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-newsticker.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            Lorem ipsum.
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-featuredarticle.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box fluid">
            Lorem ipsum.
        </div>
    </div>

    <span class="corners bottom"></span>
</div>

<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-news.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">
            
            <div class="news-block">
                <div class="headline">
                    <div class="icon"></div>
                    <div class="date">May 24 2015 -</div>
                    <div class="title">At the Bottom of the Sea</div>
                </div>
                <div class="body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
