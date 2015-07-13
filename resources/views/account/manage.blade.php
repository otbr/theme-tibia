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
                                    [<a href="#registration">{!! trans('theme::account.manage.registration') !!}</a>]
                                </div>
                            </td>
                            <td align="center" valign="middle" width="5%" class="buttons-right">
                                <a href="#" class="green-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="{{ trans('theme::account.manage.getpremium') }}">
                                </a>
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_overview.gif') }}" alt="{{ trans('theme::account.manage.overview') }}">
                                </a>
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

                                    <span v-show="isToggled('account')">{{ account()->name() }}</span>
                                    <span v-show="! isToggled('account')">{{ str_repeat('*', strlen(account()->name())) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.manage.email') !!}</th>
                                <td valign="middle">
                                    <button class="showhide" v-on="click: toggle('email')" v-class="active: isToggled('email')"></button>

                                    <span v-show="isToggled('email')">{{ account()->email() }}</span>
                                    <span v-show="! isToggled('email')">{{ str_repeat('*', strlen(account()->email())) }}</span>
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

                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td style="padding-left: 0;">
                                <a href="{{ url('/account/password') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changepassword.gif') }}" alt="{{ trans('theme::account.manage.changepassword') }}">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/email') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeemail.gif') }}" alt="{{ trans('theme::account.manage.changeemail') }}">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/rename') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_renameaccount.gif') }}" alt="{{ trans('theme::account.manage.renameaccount') }}">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/terminate') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_terminateaccount.gif') }}" alt="{{ trans('theme::account.manage.terminateaccount') }}">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>

            <div id="products-available" class="table">
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
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumtime.gif') }}" alt="{{ trans('theme::account.manage.getpremiumtime') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.premiumtime') !!}</strong><br>
                            {!! trans('theme::account.manage.premiumtimedesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumscroll.gif') }}" alt="{{ trans('theme::account.manage.getpremiumscroll') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.premiumscrolls') !!}</strong><br>
                            {!! trans('theme::account.manage.premiumscrollsdesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getextraservice.gif') }}" alt="{{ trans('theme::account.manage.getextraservice') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.extraservices') !!}</strong><br>
                            {!! trans('theme::account.manage.extraservicesdesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getmount.gif') }}" alt="{{ trans('theme::account.manage.getmount') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.mounts') !!}</strong><br>
                            {!! trans('theme::account.manage.mountsdesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getoutfit.gif') }}" alt="{{ trans('theme::account.manage.getoutfit') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.outfits') !!}</strong><br>
                            {!! trans('theme::account.manage.outfitsdesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_usegamecode.gif') }}" alt="{{ trans('theme::account.manage.usegamecode') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.gamecodes') !!}</strong><br>
                            {!! trans('theme::account.manage.gamecodesdesc') !!}
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div id="products-ready" class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.manage.readyproducts') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
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
                    </div>
                </div>
            </div>

            <br>

            <div id="history" class="table">
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
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.premiumhistory') !!}</strong><br>
                            {!! trans('theme::account.manage.premiumhistorydesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.paymenthistory') !!}</strong><br>
                            {!! trans('theme::account.manage.paymenthistorydesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.extrahistory') !!}</strong><br>
                            {!! trans('theme::account.manage.extrahistorydesc') !!}
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="{{ trans('theme::account.manage.viewhistory') }}">
                            </a>

                            <strong>{!! trans('theme::account.manage.extrahistory') !!}</strong><br>
                            {!! trans('theme::account.manage.extrahistorydesc') !!}
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div id="registration" class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.manage.registration') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            Lorem ipsum...
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
