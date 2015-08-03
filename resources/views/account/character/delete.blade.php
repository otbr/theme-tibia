@extends('theme::app')

@title(trans('theme::account.character.delete.title'))
@navigation('/account')
@bodyclass('account-character-delete')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.delete.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account.character.delete.preamble') !!}

            <form method="POST" action="{{ url('/account/character', $player->id()) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.delete.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th>{!! trans('theme::account.character.delete.player') !!}</th>
                                <td>{{ $player->name() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.character.delete.password') !!}</th>
                                <td><input type="password" name="password" size="30" maxlength="29"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.character.delete.submit') }}</span>
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{{ trans('theme::account.character.delete.back') }}</span>
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
