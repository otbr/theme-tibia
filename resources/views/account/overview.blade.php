@extends('theme::app')

@section('title', trans('theme::account/overview.title'))
@section('body', 'account-overview')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/overview.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @if ($account->isRegistered())
                    <h2>{!! trans('theme::account/overview.welcomename', ['name' => $account->registration->firstname()]) !!}</h2>
                @else
                    <h2>{!! trans('theme::account/overview.welcome') !!}</h2>
                @endif

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/overview.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <div class="buttons-right">
                                    <table>
                                        <tr>
                                            <td class="valign-top" style="padding-right: 0;">
                                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                                    <span>{!! trans('theme::account/overview.manageaccount') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="valign-middle" style="padding-right: 0;">
                                                <a href="#" class="green-button">
                                                    <span>{!! trans('theme::account/overview.getpremium') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="valign-bottom" style="padding-right: 0;">
                                                <a href="{{ url('/account/logout') }}" class="red-button">
                                                    <span>{!! trans('theme::account/overview.logout') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <table style="height: 85px;">
                                    <tr>
                                        <td class="valign-middle" style="width: 55px;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/account-status_red.gif') }}" alt="">
                                        </td>
                                        <td style="width: 5px;"></td>
                                        <td class="valign-middle">
                                            <h4 class="free">{!! trans('theme::account/overview.free') !!}</h4>
                                            <small>{!! trans('theme::account/overview.freedesc') !!}</small>
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
                            <table class="full-width">
                                <tr>
                                    <td>
                                        <div class="buttons-right">
                                            <table>
                                                @if ($account->properties->emailRequests() < 2)
                                                    <tr>
                                                        <td class="valign-top" style="padding-right: 0;">
                                                            <a href="{{ url('/account/email/request') }}" class="blue-button">
                                                                <span>{!! trans('theme::account/overview.confirm.request') !!}</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td class="valign-bottom" style="padding-right: 0;">
                                                        <a href="{{ url('/account/email') }}" class="blue-button">
                                                            <span>{!! trans('theme::account/overview.confirm.edit') !!}</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div style="margin: 5px 0 13px;">
                                            <strong>{!! trans('theme::account/overview.confirm.heading') !!}</strong>
                                            <div class="alert">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign-middle" alt="{{ trans('theme::account/overview.confirm.heading') }}">
                                                <div class="message">
                                                    {!! trans('theme::account/overview.confirm.alert') !!}
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}" alt="{{ trans('theme::account/overview.confirm.heading') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <p style="margin-bottom: 5px;">
                                            {!! trans('theme::account/overview.confirm.content') !!}
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
                            <table class="full-width">
                                <tr>
                                    <td>
                                        <div class="buttons-right">
                                            <table>
                                                <tr>
                                                    <td class="valign-middle" style="padding-right: 0;">
                                                        <a href="{{ url('/account/register') }}" class="blue-button">
                                                            <span>{!! trans('theme::account/overview.unregistered.register') !!}</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div style="margin: 5px 0 13px;">
                                            <strong>{!! trans('theme::account/overview.unregistered.heading') !!}</strong>
                                        </div>

                                        <p style="margin-bottom: 5px;">
                                            {!! trans('theme::account/overview.unregistered.content') !!}
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
                            <table class="full-width">
                                <tr>
                                    <td>
                                        <div class="buttons-right">
                                            <a href="{{ url('/account/email') }}" class="blue-button">
                                                <span>{!! trans('theme::account/overview.email.edit') !!}</span>
                                            </a>
                                        </div>

                                        <p style="margin-top: 5px;"><strong>{!! trans('theme::account/overview.email.heading') !!}</strong></p>

                                        <p style="margin-bottom: 5px;">
                                            {!! trans('theme::account/overview.email.content', [
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

                @if (false /* has vouchers */)
                    <div class="notification top">
                        <div class="borders">
                            <span class="edges top"></span>
                            <table class="full-width">
                                <tr>
                                    <td>
                                        <div class="buttons-right">
                                            <a href="{{ url('/account') }}" class="blue-button">
                                                <span>{!! trans('theme::account/overview.vouchers.vouchers') !!}</span>
                                            </a>
                                        </div>

                                        <p style="margin-top: 5px;"><strong>{!! trans('theme::account/overview.vouchers.heading') !!}</strong></p>

                                        <p style="margin-bottom: 5px;">
                                            {!! trans('theme::account/overview.vouchers.content') !!}
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
                            {!! trans('theme::account/overview.players.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped table-hover">
                                <tr>
                                    <th class="header" style="width: 40px;"></th>
                                    <th class="header">{!! trans('theme::account/overview.players.name') !!}</th>
                                    <th class="header" style="width: 120px;">{!! trans('theme::account/overview.players.world') !!}</th>
                                    <th class="header" style="width: 120px;">{!! trans('theme::account/overview.players.status') !!}</th>
                                    <th class="header" style="width: 90px;"></th>
                                </tr>

                                @forelse ($account->players as $i => $player)
                                    <tr class="character {{ $i === 0 ? 'active' : null }}" data-v-class="active: isActivated({{ $i }}, 'selectedPlayer')" data-v-on="click: activate({{ $i }}, 'selectedPlayer')">
                                        <td class="valign-middle text-center">
                                            <span class="play-integer">{{ ++$i }}.</span>
                                            @if ($player->isDeleted())
                                                <span class="play-button-red"></span>
                                            @else
                                                <a href="#" class="play-button"></a>
                                            @endif
                                        </td>
                                        <td class="valign-middle">
                                            <span>{{ $player->name() }}</span>
                                            <small>{{ $player->vocation()->name() }} {!! trans('theme::account/overview.players.level', ['level' => $player->level()]) !!}</small>
                                        </td>
                                        <td>{{ $player->world()->name() }}</td>
                                        <td>
                                            @if ($player->isHidden() and $player->isDeleted())
                                                {!! trans('theme::account/overview.players.hiddendeleted') !!}
                                            @elseif ($player->isHidden())
                                                {!! trans('theme::account/overview.players.hidden') !!}
                                            @elseif ($player->isDeleted())
                                                {!! trans('theme::account/overview.players.deleted') !!}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="character-buttons" style="font-weight: normal;">
                                                [<a href="{{ url('/account/character', $player->id()) }}">{!! trans('theme::account/overview.players.edit') !!}</a>]

                                                @if ($player->isDeleted())
                                                    [<a href="{{ url('/account/character', [$player->id(), 'undelete']) }}">{!! trans('theme::account/overview.players.undelete') !!}</a>]
                                                @else
                                                    [<a href="{{ url('/account/character', [$player->id(), 'delete']) }}">{!! trans('theme::account/overview.players.delete') !!}</a>]
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            {!! trans('theme::account/overview.players.empty') !!}
                                        </td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>

                        <table class="full-width">
                            <tr>
                                <td class="valign-bottom text-right" style="padding-right: 0;">
                                    <a href="{{ url('/account/character') }}" class="blue-button">
                                        <span>{!! trans('theme::account/overview.players.create') !!}</span>
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
