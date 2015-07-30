@extends('theme::app')

@title(trans('theme::account.character.edit.title'))
@navigation('/account')
@bodyclass('account-character-edit')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.edit.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="notification">
                <div class="borders">
                    <span class="edges top"></span>
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td align="center" valign="middle">
                                <div class="padding">
                                    [<a href="#character-data">{!! trans('theme::account.character.edit.characterdata') !!}</a>]
                                    [<a href="#character-information">{!! trans('theme::account.character.edit.characterinfo') !!}</a>]
                                </div>
                            </td>
                        </tr>
                    </table>
                    <span class="edges bottom"></span>
                </div>
            </div>

            <br>

            {!! trans('theme::account.character.edit.preamble') !!}

            @include('theme::modules.errors')
            
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div id="character-data" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.edit.characterdata') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table class="paddingless" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="10%"><strong class="{{ $errors->has('name') ? 'error' : null }}">{!! trans('theme::account.character.edit.name') !!}</strong></th>
                                        <td width="80%">{{ $player->name() }}</td>
                                        <td valign="top" align="right">
                                            <a href="{{ url('/account/character', [$player->id(), 'name']) }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changename.gif') }}" alt="{{ trans('theme::account.character.edit.changename') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height="8"></td>
                                    </tr>
                                    @if ($world = $player->world())
                                        <tr>
                                            <th><strong class="{{ $errors->has('world') ? 'error' : null }}">{!! trans('theme::account.character.edit.world') !!}</strong></th>
                                            <td>{{ $world->name() }}</td>
                                            <td valign="middle" align="right">
                                                <a href="{{ url('/account/character', [$player->id(), 'world']) }}" class="blue-button">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeworld.gif') }}" alt="{{ trans('theme::account.character.edit.changeworld') }}">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" height="8"></td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">{!! trans('theme::account.character.edit.sex') !!}</strong></th>
                                        <td>{{ $player->gender()->name() }}</td>
                                        <td valign="bottom" align="right">
                                            <a href="{{ url('/account/character', [$player->id(), 'sex']) }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changesex.gif') }}" alt="{{ trans('theme::account.character.edit.changesex') }}">
                                            </a>
                                        </td>
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
                            {!! trans('theme::account.character.edit.characterinfo') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="22%"><p><strong class="{{ $errors->has('hide') ? 'error' : null }}">{!! trans('theme::account.character.edit.hideaccount') !!}</strong></p></th>
                                        <td>
                                            <p>
                                                <label>
                                                    <input type="checkbox"> {!! trans('theme::account.character.edit.hide') !!}
                                                </label>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th valign="top"><p><strong class="{{ $errors->has('comment') ? 'error' : null }}">{!! trans('theme::account.character.edit.comment') !!}</strong></p></th>
                                        <td><p><textarea cols="50" rows="10"></textarea></p></td>
                                    </tr>
                                    <tr>
                                        <th valign="top"><p><strong class="{{ $errors->has('signature') ? 'error' : null }}">{!! trans('theme::account.character.edit.signature') !!}</strong></p></th>
                                        <td><p><textarea cols="50" rows="4"></textarea></p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td width="50%" align="center">
                                    <button class="blue-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="{{ trans('theme::account.character.edit.submit') }}">
                                    </button>
                                </td>
                                <td width="50%" align="center">
                                    <a href="{{ url('/account') }}" class="blue-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="{{ trans('theme::account.character.edit.back') }}">
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
