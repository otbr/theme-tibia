
@extends('theme::app')

@title(trans('theme::account/player/delete/confirm.title'))
@navigation('/account')
@bodyclass('account-character-delete')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account/player/delete/confirm.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account/player/delete/confirm.preamble') !!}

            <form method="POST" action="{{ url('/account/character', $player->id()) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/player/delete/confirm.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th>{!! trans('theme::account/player/delete/confirm.player') !!}</th>
                                <td>{{ $player->name() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account/player/delete/confirm.password') !!}</th>
                                <td><input type="password" name="password" size="30" maxlength="29"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account/player/delete/confirm.submit') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{{ trans('theme::account/player/delete/confirm.back') }}</span>
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
