@extends('theme::app')

@section('title', trans('theme::library/creatures.title'))
@section('body', 'library-creatures')
@section('navigation', '/library/creatures')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::library/creatures.headline') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                @foreach ($creatures as $creature)
                    <div class="monster">
                        <a href="{{ url('/library/creatures', $creature->slug()) }}">
                            <img src="{{ cdn('creatures', ['creature' => $creature->slug()]) }}" alt="{{ $creature->name() }}">
                        </a>

                        <div class="title">{{ $creature->name() }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
