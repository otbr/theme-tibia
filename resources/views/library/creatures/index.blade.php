@extends('theme::app')

@section('title', 'Creatures')
@section('body', 'library-creatures')
@section('navigation', '/library/creatures')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Creatures</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                @foreach ($creatures as $creature)
                    <div class="monster">
                        <img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/{{ $creature->image() }}" alt="{{ $creature->name() }}">
                        <div class="title">{{ $creature->name() }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
