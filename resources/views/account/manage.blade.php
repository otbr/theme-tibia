@extends('theme::app')

@section('title', trans('theme::account/manage.title'))
@section('body', 'account-manage')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/manage.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="notification">
                    <div class="borders">
                        <span class="edges top"></span>
                        <table class="full-width">
                            <tr>
                                <td class="valign-middle text-center">
                                    <div class="padding">
                                        [<a href="#general-information">{!! trans('theme::account/manage.generalinfo') !!}</a>]
                                        [<a href="#products-available">{!! trans('theme::account/manage.availableproducts') !!}</a>]
                                        [<a href="#products-ready">{!! trans('theme::account/manage.readyproducts') !!}</a>]
                                        [<a href="#history">{!! trans('theme::account/manage.history') !!}</a>]
                                        [<a href="#registration">{!! trans('theme::account/manage.registration.heading') !!}</a>]
                                    </div>
                                </td>
                                <td class="valign-middle text-center" style="width: 5%;">
                                    <div class="buttons-right">
                                        <table>
                                            <tr>
                                                <td class="valign-top">
                                                    <a href="#" class="green-button">
                                                        <span>{{ trans('theme::account/manage.getpremium') }}</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="valign-bottom">
                                                    <a href="{{ url('/account') }}" class="blue-button">
                                                        <span>{{ trans('theme::account/manage.overview') }}</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <span class="edges bottom"></span>
                    </div>
                </div>

                <div id="general-information" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/manage.generalinfo') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th style="width: 24%;">{!! trans('theme::account/manage.account') !!}</th>
                                    <td class="valign-middle">
                                        <button class="showhide repeater" data-v-on="click: toggle('account')" data-v-class="active: isToggled('account')"></button>

                                        <span data-v-show="isToggled('account')">{{ $account->name() }}</span>
                                        <span data-v-show="! isToggled('account')" class="repeater">{{ str_repeat('*', strlen($account->name())) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/manage.email') !!}</th>
                                    <td class="valign-middle">
                                        <button class="showhide repeater" data-v-on="click: toggle('email')" data-v-class="active: isToggled('email')"></button>

                                        <span data-v-show="isToggled('email')">{{ $account->email() }}</span>
                                        <span data-v-show="! isToggled('email')" class="repeater">{{ str_repeat('*', strlen($account->email())) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/manage.created') !!}</th>
                                    <td>May 15 2011, 08:33:57 CEST</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/manage.lastlogin') !!}</th>
                                    <td>May 05 2015, 15:10:40 CEST</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/manage.status') !!}</th>
                                    <td><strong class="free">{!! trans('theme::account/manage.free') !!}</strong></td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/manage.premiumpoints') !!}</th>
                                    <td>
                                        0 {!! trans('theme::account/manage.transferable', ['points' => 0]) !!}
                                        <div class="alert">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign-middle" alt="{!! trans('theme::account/manage.transferpoints') !!}">
                                            <div class="message">
                                                {!! trans('theme::account/manage.transferpointsalert') !!}
                                                <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}" alt="{!! trans('theme::account/manage.transferpoints') !!}">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <table style="width: 100%;">
                            <tr>
                                <td class="text-left" style="padding-left: 0;">
                                    <a href="{{ url('/account/password') }}" class="blue-button bottom">
                                        <span>{{ trans('theme::account/manage.changepassword') }}</span>
                                    </a>
                                </td>
                                @if ($account->isConfirmed())
                                    <td style="width: 5%;"></td>
                                    <td class="text-center">
                                        <a href="{{ url('/account/email') }}" class="blue-button bottom">
                                            <span>{{ trans('theme::account/manage.changeemail') }}</span>
                                        </a>
                                    </td>
                                @endif
                                <td style="width: 5%;"></td>
                                <td class="text-center">
                                    <a href="{{ url('/account/rename') }}" class="blue-button bottom">
                                        <span>{{ trans('theme::account/manage.renameaccount') }}</span>
                                    </a>
                                </td>
                                <td style="width: 5%;"></td>
                                <td class="text-right" style="padding-right: 0;">
                                    <a href="{{ url('/account/terminate') }}" class="blue-button bottom">
                                        <span>{{ trans('theme::account/manage.terminateaccount') }}</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div id="products-available" class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/manage.availableproducts') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.premiumtime') !!}</strong><br>
                                            {!! trans('theme::account/manage.premiumtimedesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="green-button">
                                                <span>{{ trans('theme::account/manage.getpremiumtime') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>{!! trans('theme::account/manage.points') !!}</strong>
                                                <div class="alert">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign-middle" alt="{!! trans('theme::account/manage.points') !!}">
                                                    <div class="message">
                                                        {!! trans('theme::account/manage.pointsalert', [
                                                            'server' => server()->name(),
                                                        ]) !!}
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}" alt="{!! trans('theme::account/manage.points') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            {!! trans('theme::account/manage.pointsdesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="green-button">
                                                <span>{{ trans('theme::account/manage.getpoints') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>{!! trans('theme::account/manage.extraservices') !!}</strong>
                                                <div class="alert">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign-middle" alt="{!! trans('theme::account/manage.extraservices') !!}">
                                                    <div class="message">
                                                        {!! trans('theme::account/manage.extraservicesalert') !!}
                                                        <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}" alt="{!! trans('theme::account/manage.extraservices') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            {!! trans('theme::account/manage.extraservicesdesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="green-button">
                                                <span>{{ trans('theme::account/manage.getextraservice') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.gamecodes') !!}</strong><br>
                                            {!! trans('theme::account/manage.gamecodesdesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.usegamecode') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="products-ready" class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/manage.readyproducts') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                {!! trans('theme::account/manage.noreadyproducts') !!}
                            </div>
                            {{--
                            <table class="table-striped">
                                <tr>
                                    <th width="85">{!! trans('theme::account/manage.date') !!}</th>
                                    <th>{!! trans('theme::account/manage.voucher') !!}</th>
                                    <th width="50"></th>
                                </tr>
                                <tr>
                                    <td>Jan 27 2015</td>
                                    <td>Double Experience and Skill Voucher</td>
                                    <td align="center">[<a href="#">{!! trans('theme::account/manage.view') !!}</a>]</td>
                                </tr>
                            </table>
                            --}}
                        </div>
                    </div>
                </div>

                <div id="history" class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/manage.history') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.premiumhistory') !!}</strong><br>
                                            {!! trans('theme::account/manage.premiumhistorydesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.viewhistory') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.paymenthistory') !!}</strong><br>
                                            {!! trans('theme::account/manage.paymenthistorydesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.viewhistory') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.coinhistory') !!}</strong><br>
                                            {!! trans('theme::account/manage.coinhistorydesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.viewhistory') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.extrahistory') !!}</strong><br>
                                            {!! trans('theme::account/manage.extrahistorydesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.viewhistory') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <div class="inner-box">
                                <table class="full-width">
                                    <tr>
                                        <td>
                                            <strong>{!! trans('theme::account/manage.voucherhistory') !!}</strong><br>
                                            {!! trans('theme::account/manage.voucherhistorydesc') !!}
                                        </td>
                                        <td class="valign-top text-right">
                                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                                <span>{{ trans('theme::account/manage.viewhistory') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="registration" class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/manage.registration.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                @if (! $account->isConfirmed())
                                    <strong class="error">{!! trans('theme::account/manage.registration.confirm', ['url' => url('/account')]) !!}</strong>
                                @elseif ($account->isRegistered())
                                    <table class="full-width">
                                        <tr>
                                            <th style="width: 20%;" class="valign-top">{!! trans('theme::account/manage.registration.address') !!}</th>
                                            <td>
                                                <table class="full-width">
                                                    <tr>
                                                        <td>
                                                            {{ $account->registration->firstname() }} {{ $account->registration->surname() }}<br>
                                                            {{ $account->registration->country() }}
                                                        </td>
                                                        <td class="valign-top text-right">
                                                            <a href="{{ url('/account/register/edit') }}" class="blue-button">
                                                                <span>{{ trans('theme::account/manage.registration.edit') }}</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 5px;"></td>
                                        </tr>
                                        <tr>
                                            <th>{!! trans('theme::account/manage.registration.birthday') !!}</th>
                                            <td>
                                                {{ $account->registration->birthday()->format('F d Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 5px;"></td>
                                        </tr>
                                        <tr>
                                            <th>{!! trans('theme::account/manage.registration.gender') !!}</th>
                                            <td>
                                                @if ($account->registration->gender() == 'male')
                                                    {!! trans('theme::account/manage.registration.male') !!}
                                                @else
                                                    {!! trans('theme::account/manage.registration.female') !!}
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                @else
                                    <table class="full-width">
                                        <tr>
                                            <td>{!! trans('theme::account/manage.registration.unregistered') !!}</td>
                                            <td class="valign-top text-right">
                                                <a href="{{ url('/account/register') }}" class="blue-button">
                                                    <span>{{ trans('theme::account/manage.registration.register') }}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
