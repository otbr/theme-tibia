@extends('theme::app')

@section('title', $creature->name())
@section('body', 'library-creatures-single')
@section('navigation', '/library/creatures')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Creatures</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <table class="pagination">
                    <tr>
                        <td class="previous">
                            @if ($previous)
                                <a href="{{ url('/library/creatures', $previous->slug()) }}">previous</a>
                            @endif
                        </td>
                        <td class="back">
                            <a href="{{ url('/library/creatures') }}">back</a>
                        </td>
                        <td class="next">
                            @if ($next)
                                <a href="{{ url('/library/creatures', $next->slug()) }}">next</a>
                            @endif
                        </td>
                    </tr>
                </table>

                <br>

                <table class="creature">
                    <tr>
                        <td>
                            <img src="{{ config('pandaac.theme-tibia.paths.creatures') }}/{{ $creature->slug() }}.gif" alt="{{ $creature->name() }}">
                        </td>
                        <td>
                            <h2 class="iconless">{{ $creature->name() }}</h2>
                        </td>
                    </tr>
                </table>

                @if ($description = $creature->description())
                    {!! $description !!}
                @else
                    <p><em>This creature has no description yet.</em></p>
                @endif
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
