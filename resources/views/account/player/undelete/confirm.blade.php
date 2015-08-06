@extends('theme::app')

@title(trans('theme::account.character.undelete.title'))
@navigation('/account')
@bodyclass('account-character-deleted')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.undelete.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            {!! trans('theme::account.character.undelete.preamble') !!}

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.undelete.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th>{!! trans('theme::account.character.undelete.name') !!}</th>
                                <td>{{ $player->name() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.character.undelete.submit') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{{ trans('theme::account.character.undelete.back') }}</span>
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
