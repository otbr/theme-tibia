@extends('theme::app')

@title(trans('theme::account.character.name.title'))
@navigation('/account')
@bodyclass('account-character-name')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.name.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account.character.name.preamble', [
                'server'    => $server,
                'rules'     => url('/support/rules'),
            ]) !!}

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'name']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.name.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th>{!! trans('theme::account.character.name.current') !!}</th>
                                <td>{{ $player->name() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.character.name.new') !!}</th>
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
                                <span>{{ trans('theme::account.character.name.submit') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                <span>{{ trans('theme::account.character.name.back') }}</span>
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
