@extends('theme::app')

@title(trans('theme::account.overview.title'))
@navigation('/account')
@bodyclass('account-overview')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')
            
            @if ($account->isRegistered())
                <h2>{!! trans('theme::account.overview.welcomename', ['name' => $account->registration->firstname()]) !!}</h2>
            @else
                <h2>{!! trans('theme::account.overview.welcome') !!}</h2>
            @endif

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.overview.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <div class="buttons-right">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td valign="top" style="padding-right: 0;">
                                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_manageaccount.gif') }}" alt="{{ trans('theme::account.overview.manageaccount') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" style="padding-right: 0;">
                                            <a href="#" class="green-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="{{ trans('theme::account.overview.getpremium') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="bottom" style="padding-right: 0;">
                                            <a href="{{ url('/account/logout') }}" class="red-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_logout.gif') }}" alt="{{ trans('theme::account.overview.logout') }}">
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
                                    <td width="5"></td>
                                    <td valign="middle">
                                        <h4 class="free">{!! trans('theme::account.overview.free') !!}</h4>
                                        <small>{!! trans('theme::account.overview.freedesc') !!}</small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @if (! $account->isConfirmed())
                <div class="notification top">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td>
                                    <div class="buttons-right">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            @if ($account->properties->emailRequests() < 2)
                                                <tr>
                                                    <td valign="top" style="padding-right: 0;">
                                                        <a href="{{ url('/account/email/request') }}" class="blue-button">
                                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_rerequestemail.gif') }}" alt="{{ trans('theme::account.overview.confirm.request') }}">
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td valign="bottom" style="padding-right: 0;">
                                                    <a href="{{ url('/account/email') }}" class="blue-button">
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeemail.gif') }}" alt="{{ trans('theme::account.overview.confirm.edit') }}">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="margin: 5px 0 13px;">
                                        <strong>{!! trans('theme::account.overview.confirm.heading') !!}</strong>
                                        <div class="alert">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign">
                                            <div class="message">
                                                {!! trans('theme::account.overview.confirm.alert') !!}
                                                <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <p style="margin-bottom: 5px;">
                                        {!! trans('theme::account.overview.confirm.content') !!}
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>
            @elseif (! $account->isRegistered())
                <div class="notification top">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td>
                                    <div class="buttons-right">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td valign="middle" style="padding-right: 0;">
                                                    <a href="{{ url('/account/register') }}" class="blue-button">
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_registeraccount.gif') }}" alt="{{ trans('theme::account.overview.unregistered.register') }}">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="margin: 5px 0 13px;">
                                        <strong>{!! trans('theme::account.overview.unregistered.heading') !!}</strong>
                                    </div>

                                    <p style="margin-bottom: 5px;">
                                        {!! trans('theme::account.overview.unregistered.content') !!}
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>
            @endif

            @if ($account->hasPendingEmail())
                <div class="notification top">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td>
                                    <div class="buttons-right">
                                        <a href="{{ url('/account/email') }}" class="blue-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_edit.gif') }}" alt="{{ trans('theme::account.overview.email.edit') }}">
                                        </a>
                                    </div>

                                    <p style="margin-top: 5px;"><strong>{!! trans('theme::account.overview.email.heading') !!}</strong></p>

                                    <p style="margin-bottom: 5px;">
                                        {!! trans('theme::account.overview.email.content', [
                                            'email' => $account->properties->email(),
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
                        {!! trans('theme::account.overview.characters.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped table-hover" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th class="header" width="40"></th>
                                <th class="header">{!! trans('theme::account.overview.characters.name') !!}</th>
                                <th class="header" width="120">{!! trans('theme::account.overview.characters.world') !!}</th>
                                <th class="header" width="90">{!! trans('theme::account.overview.characters.status') !!}</th>
                                <th class="header" width="90"></th>
                            </tr>

                            @forelse ($account->players as $i => $player)
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
                                    <td>{!! trans('theme::account.overview.characters.hidden') !!}</td>
                                    <td align="center">
                                        <div class="character-buttons" style="font-weight: normal;">
                                            [<a href="{{ url('/account/character', $player->id()) }}">{!! trans('theme::account.overview.characters.edit') !!}</a>]
                                            [<a href="{{ url('/account/character', [$player->id(), 'delete']) }}">{!! trans('theme::account.overview.characters.delete') !!}</a>]
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        {!! trans('theme::account.overview.characters.empty') !!}
                                    </td>
                                </tr>
                            @endforelse
                        </table>
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td valign="bottom" align="right" style="padding-right: 0;">
                                <a href="{{ url('/account/character') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_createcharacter.gif') }}" alt="{{ trans('theme::account.overview.characters.create') }}">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
