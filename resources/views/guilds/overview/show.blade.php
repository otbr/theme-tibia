@extends('theme::app')

@section('title', trans('theme::guilds/overview/show.title'))
@section('body', 'guilds-form')
@section('navigation', '/guilds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::guilds/overview/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @if ($worlds = worlds() and $worlds->count() > 1)
                    {!! trans('theme::guilds/overview/show.preamble') !!}

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::guilds/overview/show.worlds.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <form method="POST" action="{{ url('/guilds') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <table class="full-width">
                                    <tr>
                                        <th style="width: 1%;">{!! trans('theme::guilds/overview/show.worlds.world') !!}</th>
                                        <td>
                                            <select name="world">
                                                @foreach ($worlds as $option)
                                                    <option value="{{ $option->slug() }}" {{ ($world and $world->id() === $option->id()) ? 'selected' : null }}>{{ $option->name() }}</option>
                                                @endforeach
                                            </select>

                                            &nbsp;

                                            <button class="blue-button">
                                                <span>{!! trans('theme::guilds/overview/show.worlds.submit') !!}</span>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                @endif

                @if ($guilds->count() > 0)
                    <div class="table {{ $worlds->count() > 1 ? 'top' : null }}">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans_choice('theme::guilds/overview/show.guilds.heading', $worlds->count(), [
                                    'world' => $world ? $world->name() : null,
                                ]) !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped">
                                    <tr>
                                        <th style="width: 64px;">{!! trans('theme::guilds/overview/show.guilds.logo') !!}</th>
                                        <th>{!! trans('theme::guilds/overview/show.guilds.description') !!}</th>
                                        <th style="width: 56px;"></th>
                                    </tr>

                                    @foreach ($guilds as $guild)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                                            </td>
                                            <td class="breakwords">
                                                <strong>{{ $guild->name() }}</strong>

                                                @if ($description = $guild->properties->description())
                                                    <br>
                                                    {{ $description }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($world and $worlds->count() > 1)
                                                    <a href="{{ url('/guilds', [$world->slug(), $guild->slug()]) }}" class="blue-button">
                                                        <span>{!! trans('theme::guilds/overview/show.guilds.view') !!}</span>
                                                    </a>
                                                @else
                                                    <a href="{{ url('/guilds', $guild->slug()) }}" class="blue-button">
                                                        <span>{!! trans('theme::guilds/overview/show.guilds.view') !!}</span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="table {{ ($guilds->count() > 0 or $worlds->count() > 1) ? 'top' : null }}">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans_choice('theme::guilds/overview/show.forming.heading', $worlds->count(), [
                                'world' => $world ? $world->name() : null,
                            ]) !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped {{ $forming->count() === 0 ? 'inverse' : null }}">
                                @if ($forming->count() > 0)
                                    <tr>
                                        <th style="width: 64px;">{!! trans('theme::guilds/overview/show.forming.logo') !!}</th>
                                        <th>{!! trans('theme::guilds/overview/show.forming.description') !!}</th>
                                        <th style="width: 56px;"></th>
                                    </tr>

                                    @foreach ($forming as $guild)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                                            </td>
                                            <td class="breakwords">
                                                <strong>{{ $guild->name() }}</strong>

                                                @if ($description = $guild->properties->description())
                                                    <br>
                                                    {{ $description }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($world and $worlds->count() > 1)
                                                    <a href="{{ url('/guilds', [$world->slug(), $guild->slug()]) }}" class="blue-button">
                                                        <span>{!! trans('theme::guilds/overview/show.guilds.view') !!}</span>
                                                    </a>
                                                @else
                                                    <a href="{{ url('/guilds', $guild->slug()) }}" class="blue-button">
                                                        <span>{!! trans('theme::guilds/overview/show.guilds.view') !!}</span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>{!! trans('theme::guilds/overview/show.forming.empty') !!}</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>

                <table>
                    <tr>
                        <td>
                            {!! trans('theme::guilds/overview/show.postamble') !!}
                            <a href="{{ url('/guilds/create') }}" class="blue-button">
                                <span>{!! trans('theme::guilds/overview/show.found') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
