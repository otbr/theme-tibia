@extends('theme::app')

@title(trans('theme::account.manage.title'))
@navigation('/account')
@bodyclass('account-manage')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
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
                                    [<a href="#general-information">{!! trans('theme::account.manage.generalinfo') !!}</a>]
                                    [<a href="#products-available">{!! trans('theme::account.manage.availableproducts') !!}</a>]
                                    [<a href="#products-ready">{!! trans('theme::account.manage.readyproducts') !!}</a>]
                                    [<a href="#history">{!! trans('theme::account.manage.history') !!}</a>]
                                    [<a href="#registration">{!! trans('theme::account.manage.registration.heading') !!}</a>]
                                </div>
                            </td>
                            <td align="center" valign="middle" width="5%">
                                <div class="buttons-right">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                        <tr>
                                            <td valign="top">
                                                <a href="#" class="green-button">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="{{ trans('theme::account.manage.getpremium') }}">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="bottom">
                                                <a href="{{ url('/account') }}" class="blue-button">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_overview.gif') }}" alt="{{ trans('theme::account.manage.overview') }}">
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
                        {!! trans('theme::account.manage.generalinfo') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th width="24%">{!! trans('theme::account.manage.account') !!}</th>
                                <td valign="middle">
                                    <button class="showhide" v-on="click: toggle('account')" v-class="active: isToggled('account')"></button>

                                    <span v-show="isToggled('account')">{{ $account->name() }}</span>
                                    <span v-show="! isToggled('account')">{{ str_repeat('*', strlen($account->name())) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.manage.email') !!}</th>
                                <td valign="middle">
                                    <button class="showhide" v-on="click: toggle('email')" v-class="active: isToggled('email')"></button>

                                    <span v-show="isToggled('email')">{{ $account->email() }}</span>
                                    <span v-show="! isToggled('email')">{{ str_repeat('*', strlen($account->email())) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.manage.created') !!}</th>
                                <td>May 15 2011, 08:33:57 CEST</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.manage.lastlogin') !!}</th>
                                <td>May 05 2015, 15:10:40 CEST</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.manage.status') !!}</th>
                                <td><strong class="free">{!! trans('theme::account.manage.free') !!}</strong></td>
                            </tr>
                        </table>
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td align="left" style="padding-left: 0;">
                                <a href="{{ url('/account/password') }}" class="blue-button bottom">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changepassword.gif') }}" alt="{{ trans('theme::account.manage.changepassword') }}">
                                </a>
                            </td>
                            @if ($account->isConfirmed())
                                <td width="5%"></td>
                                <td align="middle">
                                    <a href="{{ url('/account/email') }}" class="blue-button bottom">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeemail.gif') }}" alt="{{ trans('theme::account.manage.changeemail') }}">
                                    </a>
                                </td>
                            @endif
                            <td width="5%"></td>
                            <td align="middle">
                                <a href="{{ url('/account/rename') }}" class="blue-button bottom">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_renameaccount.gif') }}" alt="{{ trans('theme::account.manage.renameaccount') }}">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td align="right" style="padding-right: 0;">
                                <a href="{{ url('/account/terminate') }}" class="blue-button bottom">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_terminateaccount.gif') }}" alt="{{ trans('theme::account.manage.terminateaccount') }}">
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
                        {!! trans('theme::account.manage.availableproducts') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.premiumtime') !!}</strong><br>
                                        {!! trans('theme::account.manage.premiumtimedesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="green-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumtime.gif') }}" alt="{{ trans('theme::account.manage.getpremiumtime') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <div>
                                            <strong>{!! trans('theme::account.manage.premiumscrolls') !!}</strong>
                                            <div class="alert">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign">
                                                <div class="message">
                                                    {!! trans('theme::account.manage.premiumscrollsalert') !!}
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {!! trans('theme::account.manage.premiumscrollsdesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="green-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumscroll.gif') }}" alt="{{ trans('theme::account.manage.getpremiumscroll') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <div>
                                            <strong>{!! trans('theme::account.manage.extraservices') !!}</strong>
                                            <div class="alert">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/info.gif') }}" class="valign">
                                                <div class="message">
                                                    {!! trans('theme::account.manage.extraservicesalert') !!}
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/ornament.gif') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {!! trans('theme::account.manage.extraservicesdesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="green-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getextraservice.gif') }}" alt="{{ trans('theme::account.manage.getextraservice') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.mounts') !!}</strong><br>
                                        {!! trans('theme::account.manage.mountsdesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getmount.gif') }}" alt="{{ trans('theme::account.manage.getmount') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.outfits') !!}</strong><br>
                                        {!! trans('theme::account.manage.outfitsdesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getoutfit.gif') }}" alt="{{ trans('theme::account.manage.getoutfit') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.gamecodes') !!}</strong><br>
                                        {!! trans('theme::account.manage.gamecodesdesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_usegamecode.gif') }}" alt="{{ trans('theme::account.manage.usegamecode') }}">
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
                        {!! trans('theme::account.manage.readyproducts') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            {!! trans('theme::account.manage.noreadyproducts') !!}
                        </div>
                        {{--
                        <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th width="85">{!! trans('theme::account.manage.date') !!}</th>
                                <th>{!! trans('theme::account.manage.voucher') !!}</th>
                                <th width="50"></th>
                            </tr>
                            <tr>
                                <td>Jan 27 2015</td>
                                <td>Double Experience and Skill Voucher</td>
                                <td align="center">[<a href="#">{!! trans('theme::account.manage.view') !!}</a>]</td>
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
                        {!! trans('theme::account.manage.history') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.premiumhistory') !!}</strong><br>
                                        {!! trans('theme::account.manage.premiumhistorydesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.paymenthistory') !!}</strong><br>
                                        {!! trans('theme::account.manage.paymenthistorydesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                                        </a>    
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    {{--
                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.extrahistory') !!}</strong><br>
                                        {!! trans('theme::account.manage.extrahistorydesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td>
                                        <strong>{!! trans('theme::account.manage.extrahistory') !!}</strong><br>
                                        {!! trans('theme::account.manage.extrahistorydesc') !!}
                                    </td>
                                    <td valign="top" align="right">
                                        <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    --}}
                </div>
            </div>

            <div id="registration" class="table top">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.manage.registration.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            @if (! $account->isConfirmed())
                                <strong class="error">{!! trans('theme::account.manage.registration.confirm', ['url' => url('/account')]) !!}</strong>
                            @elseif ($account->isRegistered())
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="20%" valign="top">{!! trans('theme::account.manage.registration.address') !!}</th>
                                        <td>
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td>
                                                        {{ $account->registration->firstname() }} {{ $account->registration->surname() }}<br>
                                                        {{ $account->registration->country() }}
                                                    </td>
                                                    <td valign="top" align="right">
                                                        <a href="{{ url('/account/register/edit') }}" class="blue-button">
                                                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_edit.gif') }}" alt="{{ trans('theme::account.manage.registration.edit') }}">
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" height="5"></td>
                                    </tr>
                                    <tr>
                                        <th>{!! trans('theme::account.manage.registration.birthday') !!}</th>
                                        <td>
                                            {{ $account->registration->birthday()->format('F d Y') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" height="5"></td>
                                    </tr>
                                    <tr>
                                        <th>{!! trans('theme::account.manage.registration.gender') !!}</th>
                                        <td>
                                            @if ($account->registration->gender() == 'male')
                                                {!! trans('theme::account.manage.registration.male') !!}
                                            @else
                                                {!! trans('theme::account.manage.registration.female') !!}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            @else
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td>{!! trans('theme::account.manage.registration.unregistered') !!}</td>
                                        <td valign="top" align="right">
                                            <a href="{{ url('/account/register') }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_registeraccount.gif') }}" alt="{{ trans('theme::account.manage.registration.register') }}">
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
