@extends('theme::app')

@section('title', 'Creatures')
@section('body', 'library-creatures')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-creatures.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">
            @foreach($creatures as $row)
                <div class="monster">
                    <img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/{{ $row->image() }}">
                    <div class="title">{{ $row->name() }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
