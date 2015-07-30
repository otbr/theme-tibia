@extends('theme::app')

@title('Creatures')
@navigation('/library/creatures')
@bodyclass('library-creatures')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Creatures</div>
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

    <span class="corners bottom"></span>
</div>
@endsection
