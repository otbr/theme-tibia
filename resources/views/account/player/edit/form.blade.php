@extends('theme::app')

@section('title', trans('theme::account/player/edit/form.title'))
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/player/edit/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="notification">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table class="full-width">
                            <tr>
                                <td class="valign-top text-center">
                                    <div class="padding">
                                        [<a href="#character-data">{!! trans('theme::account/player/edit/form.characterdata') !!}</a>]
                                        [<a href="#character-information">{!! trans('theme::account/player/edit/form.characterinfo') !!}</a>]
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>

                <br>

                {!! trans('theme::account/player/edit/form.preamble') !!}

                @include('theme::errors')
                
                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div id="character-data" class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/player/edit/form.characterdata') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <div class="inner-box">
                                    <table class="paddingless full-width">
                                        <tr>
                                            <th style="width: 20%;"><strong class="{{ $errors->has('name') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.name') !!}</strong></th>
                                            <td style="width: 70%;">{{ $player->name() }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 8px;"></td>
                                        </tr>
                                        @if ($world = $player->world())
                                            <tr>
                                                <th><strong class="{{ $errors->has('world') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.world') !!}</strong></th>
                                                <td>{{ $world->name() }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="height: 8px;"></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.sex') !!}</strong></th>
                                            <td>{{ $player->gender()->name() }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div id="character-information" class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/player/edit/form.characterinfo') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <div class="inner-box">
                                    <table class="full-width">
                                        <tr>
                                            <th style="width: 22%;"><p><strong class="{{ $errors->has('hide') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.hideaccount') !!}</strong></p></th>
                                            <td>
                                                <p>
                                                    <label>
                                                        <input type="checkbox" name="hide" {{ old('hide', $player->properties->hidden()) ? 'checked' : null }}>
                                                        {!! trans('theme::account/player/edit/form.hide') !!}
                                                    </label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="valign-top">
                                                <p>
                                                    <strong class="{{ $errors->has('comment') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.comment') !!}</strong>
                                                </p>
                                            </th>
                                            <td>
                                                <p>
                                                    <textarea name="comment" cols="50" rows="10">{{ old('comment', $player->properties->comment()) }}</textarea>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="valign-top">
                                                <p>
                                                    <strong class="{{ $errors->has('signature') ? 'error' : null }}">{!! trans('theme::account/player/edit/form.signature') !!}</strong>
                                                </p>
                                            </th>
                                            <td>
                                                <p>
                                                    <textarea name="signature" cols="50" rows="4">{{ old('signature', $player->properties->signature()) }}</textarea>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <table class="full-width">
                                <tr>
                                    <td style="width: 50%;" class="text-center">
                                        <button class="blue-button">
                                            <span>{!! trans('theme::account/player/edit/form.submit') !!}</span>
                                        </button>
                                    </td>
                                    <td style="widtH: 50%;" class="text-center">
                                        <a href="{{ url('/account') }}" class="blue-button">
                                            <span>{!! trans('theme::account/player/edit/form.back') !!}</span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
