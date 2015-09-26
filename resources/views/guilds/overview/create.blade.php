@extends('theme::app')

@section('title', trans('theme::guilds/overview/create.title'))
@section('body', 'guilds-form')
@section('navigation', '/guilds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::guilds/overview/create.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                {!! trans('theme::guilds/overview/create.preamble') !!}

                @include('theme::errors')

                <form method="POST" action="{{ url('/guilds/create') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::guilds/overview/create.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table class="full-width">
                                <tr>
                                    <th style="width: 15%;">
                                        <label for="name">{!! trans('theme::guilds/overview/create.guildname') !!}</label>
                                    </th>
                                    <td>
                                        <input type="text" name="name" id="name" size="30" maxlength="29">
                                    </td>
                                </tr>
                                @if ($worlds->count() > 1)
                                    <tr>
                                        <th>
                                            <label for="world">{!! trans('theme::guilds/overview/create.world') !!}</label>
                                        </th>
                                        <td>
                                            <select name="world" id="world">
                                                @foreach ($worlds as $option)
                                                    <option value="{{ $option->slug() }}" {{ $world->id() === $option->id() ? 'selected' : null }}>{{ $option->name() }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>
                                        <label for="leader">{!! trans('theme::guilds/overview/create.leader') !!}</label>
                                    </th>
                                    <td>
                                        <select name="leader" id="leader">
                                            @foreach (account()->players as $player)
                                                <option value="{{ $player->id() }}">{{ $player->name() }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="password">{!! trans('theme::guilds/overview/create.password') !!}</label>
                                    </th>
                                    <td>
                                        <input type="password" name="password" id="password" size="30" maxlength="29">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-right">
                                <button class="blue-button">
                                    <span>{!! trans('theme::guilds/overview/create.submit') !!}</span>
                                </button>
                            </td>
                            <td style="width: 7%;"></td>
                            <td>
                                <a href="{{ ($world and $worlds->count() > 1) ? url('/guilds', $world->slug()) : url('/guilds') }}" class="blue-button">
                                    <span>{!! trans('theme::guilds/overview/create.back') !!}</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
