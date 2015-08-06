@extends('theme::app')

@title(trans('theme::account.character.confirm.title'))
@navigation('/account')
@bodyclass('account-character-confirm')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.confirm.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <form method="POST" action="{{ url('/account/character') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="player" value="{{ old('player') }}">
                <input type="hidden" name="sex" value="{{ old('sex') }}">
                <input type="hidden" name="vocation" value="{{ old('vocation') }}">
                <input type="hidden" name="world" value="{{ old('world') }}">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.confirm.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th>{!! trans('theme::account.character.confirm.name') !!}</th>
                                <td>{{ old('player') }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.character.confirm.sex') !!}</th>
                                <td>{{ gender(old('sex'))->name() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.character.confirm.vocation') !!}</th>
                                <td>{{ vocation(old('vocation'))->name() }}</td>
                            </tr>
                            @if (worlds()->count() > 1)
                                <tr>
                                    <th>{!! trans('theme::account.character.confirm.world') !!}</th>
                                    <td>{{ world(old('world'))->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account.character.confirm.type') !!}</th>
                                    <td>{{ world(old('world'))->type() }}</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.character.confirm.continue') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <button name="back" class="blue-button">
                                <span>{{ trans('theme::account.character.confirm.back') }}</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
