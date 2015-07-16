@extends('theme::app')

@title(trans('theme::account.index.title'))
@navigation('/account')
@bodyclass('account-index')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')
            
            <h2>{!! trans('theme::account.index.welcome') !!}</h2>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.index.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <div class="buttons-right">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td valign="top">
                                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_manageaccount.gif') }}" alt="{{ trans('theme::account.index.manageaccount') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="middle">
                                            <a href="#" class="green-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="{{ trans('theme::account.index.getpremium') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="bottom">
                                            <a href="{{ url('/account/logout') }}" class="red-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_logout.gif') }}" alt="{{ trans('theme::account.index.logout') }}">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <table height="85" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td valign="middle" width="55">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/account-status_red.gif') }}">
                                    </td>
                                    <td valign="middle">
                                        <h4 class="free">{!! trans('theme::account.index.free') !!}</h4>
                                        <small>{!! trans('theme::account.index.freedesc') !!}</small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @if (! account()->isConfirmed())
                <div class="notification top">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td>
                                    <div class="buttons-right">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td valign="top">
                                                    <a href="{{ url('/account/email/request') }}" class="blue-button">
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_rerequestemail.gif') }}" alt="{{ trans('theme::account.index.confirm.request') }}">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="bottom">
                                                    <a href="{{ url('/account/email') }}" class="blue-button">
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeemail.gif') }}" alt="{{ trans('theme::account.index.confirm.edit') }}">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="margin: 5px 0 13px;">
                                        <strong>{!! trans('theme::account.index.confirm.heading') !!}</strong>
                                        <div class="alert">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign">
                                            <div class="message">
                                                {!! trans('theme::account.index.confirm.alert') !!}
                                                <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <p style="margin-bottom: 5px;">
                                        {!! trans('theme::account.index.confirm.content') !!}
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>
            @endif

            @if (account()->hasPendingEmail())
                <div class="notification top">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td>
                                    <div class="buttons-right">
                                        <a href="{{ url('/account/email') }}" class="blue-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_edit.gif') }}" alt="{{ trans('theme::account.index.email.edit') }}">
                                        </a>
                                    </div>

                                    <p style="margin-top: 5px;"><strong>{!! trans('theme::account.index.email.heading') !!}</strong></p>

                                    <p style="margin-bottom: 5px;">
                                        {!! trans('theme::account.index.email.content', [
                                            'email' => account()->properties->email(),
                                            'days'  => config('pandaac.mail.timers.email-change'),
                                        ]) !!}
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>
            @endif

            <div class="table top">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.index.characters.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped table-hover" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th class="header" width="40"></th>
                                <th class="header">{!! trans('theme::account.index.characters.name') !!}</th>
                                <th class="header" width="120">{!! trans('theme::account.index.characters.world') !!}</th>
                                <th class="header" width="90">{!! trans('theme::account.index.characters.status') !!}</th>
                                <th class="header" width="90"></th>
                            </tr>

                            @forelse (account()->players as $i => $player)
                                <tr class="character {{ $i === 0 ? 'active' : null }}" v-class="active: isActivated({{ $i }}, 'selectedPlayer')" v-on="click: activate({{ $i }}, 'selectedPlayer')">
                                    <td align="center" valign="middle">
                                        <span class="play-integer">{{ ++$i }}.</span>
                                        <a href="#" class="play-button"></a>
                                    </td>
                                    <td valign="middle">
                                        <span>{{ $player->name() }}</span>
                                        <small>{{ $player->vocation()->name() }} - Level {{ $player->level() }}</small>
                                    </td>
                                    <td>{{ $player->world()->name() }}</td>
                                    <td>{!! trans('theme::account.index.characters.hidden') !!}</td>
                                    <td align="center">
                                        <div class="character-buttons" style="font-weight: normal;">
                                            [<a href="{{ url('/account/character', $player->id()) }}">{!! trans('theme::account.index.characters.edit') !!}</a>]
                                            [<a href="{{ url('/account/character', [$player->id(), 'delete']) }}">{!! trans('theme::account.index.characters.delete') !!}</a>]
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        {!! trans('theme::account.index.characters.empty') !!}
                                    </td>
                                </tr>
                            @endforelse
                        </table>
                    </div>

                    <div style="height: 31px;">
                        <div class="buttons-right">
                            <a href="{{ url('/account/character') }}" class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_createcharacter.gif') }}" alt="{{ trans('theme::account.index.characters.create') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
