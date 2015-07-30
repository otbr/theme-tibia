@extends('theme::app')

@title(trans('theme::account.character.sex.title'))
@navigation('/account')
@bodyclass('account-character-sex')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.sex.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'sex']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.sex.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account.character.sex.content', ['name' => $player->name()]) !!}
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="green-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_yes.gif') }}" alt="{{ trans('theme::account.character.sex.yes') }}">
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="{{ trans('theme::account.character.sex.back') }}">
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
