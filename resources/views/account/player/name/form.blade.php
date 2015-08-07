@extends('theme::app')

@section('title', trans('theme::account/player/name/form.title'))
@section('body', 'account-player-name-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/player/name/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/player/name/form.preamble', [
                    'server'    => server()->name(),
                    'rules'     => url('/support/rules'),
                ]) !!}

                <form method="POST" action="{{ url('/account/character', [$player->id(), 'name']) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/player/name/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th>{!! trans('theme::account/player/name/form.current') !!}</th>
                                    <td>{{ $player->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/player/name/form.new') !!}</th>
                                    <td><input type="text" name="name" size="30" maxlength="29"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="green-button">
                                    <span>{{ trans('theme::account/player/name/form.submit') }}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                    <span>{{ trans('theme::account/player/name/form.back') }}</span>
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
