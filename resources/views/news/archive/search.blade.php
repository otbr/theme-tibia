@extends('theme::app')

@section('title', trans('theme::news/archive/search.title'))
@section('navigation', '/archive')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/archive/search.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::news.archive.form')

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
