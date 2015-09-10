@extends('theme::app')

@section('title', trans('theme::guilds/guild/show.title'))
@section('body', 'guilds-show')
@section('navigation', '/guilds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::guilds/guild/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <table class="full-width">
                    <tr>
                        <td class="logo">
                            <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                        </td>
                        <td>
                            <h1>{{ $guild->name() }}</h1>
                        </td>
                        <td class="logo">
                            <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                        </td>
                    </tr>
                </table>

                <table class="full-width informations-table">
                    <tr>
                        <td class="valign-top">
                            <div class="table">
                                <header class="header">
                                    <div class="borders">
                                        <span class="edges top"></span>
                                        {!! trans('theme::guilds/guild/show.information.heading') !!}
                                        <span class="edges bottom"></span>
                                    </div>
                                </header>

                                <div class="content dark">
                                    @if ($description = $guild->properties->description())
                                        {{ $description }}
                                        <br>
                                        <br>
                                    @endif

                                    {!! trans_choice('theme::guilds/guild/show.information.founded', worlds()->count(), [
                                        'world' => $world ? $world->name() : null,
                                        'date'  => $guild->properties->createdAt()->format('M d Y'),
                                    ]) !!}
                                    <br>

                                    @if (! $guild->isForming())
                                        {!! trans('theme::guilds/guild/show.information.active') !!}<br>
                                    @else
                                        {!! trans('theme::guilds/guild/show.information.forming') !!}<br>
                                    @endif

                                    @if (rand(0, 1))
                                        {!! trans('theme::guilds/guild/show.information.opened') !!}<br>
                                    @else
                                        {!! trans('theme::guilds/guild/show.information.closed') !!}<br>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="valign-top navigation">
                            <div class="table">
                                <header class="header">
                                    <div class="borders">
                                        <span class="edges top"></span>
                                        {!! trans('theme::guilds/guild/show.navigation.heading') !!}
                                        <span class="edges bottom"></span>
                                    </div>
                                </header>

                                <div class="content dark">
                                    <table class="full-width text-center">
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.wars') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.events') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.offence') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
