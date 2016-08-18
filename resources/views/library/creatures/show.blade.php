@extends('theme::app')

@section('title', $creature->name())
@section('navigation', '/library/creatures')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{{ $creature->name() }}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <table class="pagination">
                    <tr>
                        <td class="previous">
                            @if ($previous)
                                <a href="{{ url('/library/creatures', $previous->slug()) }}">{!! trans('theme::library/creatures.previous') !!}</a>
                            @endif
                        </td>
                        <td class="back">
                            <a href="{{ url('/library/creatures') }}">{!! trans('theme::library/creatures.back') !!}</a>
                        </td>
                        <td class="next">
                            @if ($next)
                                <a href="{{ url('/library/creatures', $next->slug()) }}">{!! trans('theme::library/creatures.next') !!}</a>
                            @endif
                        </td>
                    </tr>
                </table>

                <br>

                <table class="creature">
                    <tr>
                        <td>
                            <img src="{{ cdn('creatures', ['creature' => $creature->slug()]) }}" alt="{{ $creature->name() }}">
                        </td>
                        <td>
                            <h2 class="iconless">{{ $creature->name() }}</h2>
                        </td>
                    </tr>
                </table>

                @if ($description = $creature->description())
                    {!! $description !!}
                @else
                    <p><em>{!! trans('theme::library/creatures.empty') !!}</em></p>
                @endif
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
