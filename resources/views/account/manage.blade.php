@extends('theme::app')

@title('Account Management')
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
                                    [<a href="#general-information">General Information</a>]
                                    [<a href="#products-available">Products Available</a>]
                                    [<a href="#products-ready">Products Ready To Use</a>]
                                    [<a href="#history">History</a>]
                                    [<a href="#registration">Registration</a>]
                                </div>
                            </td>
                            <td align="center" valign="middle" width="5%" class="buttons-right">
                                <a href="#" class="green-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="Get Premium">
                                </a>
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_overview.gif') }}" alt="Overview">
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
                        General Information
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th width="24%">Account Name:</th>
                                <td valign="middle">
                                    <button class="showhide" v-on="click: toggle('account')" v-class="active: isToggled('account')"></button>

                                    <span v-show="isToggled('account')">{{ account()->name() }}</span>
                                    <span v-show="! isToggled('account')">{{ str_repeat('*', strlen(account()->name())) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Email Address:</th>
                                <td valign="middle">
                                    <button class="showhide" v-on="click: toggle('email')" v-class="active: isToggled('email')"></button>

                                    <span v-show="isToggled('email')">{{ account()->email() }}</span>
                                    <span v-show="! isToggled('email')">{{ str_repeat('*', strlen(account()->email())) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created:</th>
                                <td>May 15 2011, 08:33:57 CEST</td>
                            </tr>
                            <tr>
                                <th>Last Login:</th>
                                <td>May 05 2015, 15:10:40 CEST</td>
                            </tr>
                            <tr>
                                <th>Account Status:</th>
                                <td><strong class="free">Free Account</strong></td>
                            </tr>
                        </table>
                    </div>

                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td style="padding-left: 0;">
                                <a href="{{ url('/account/password') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changepassword.gif') }}" alt="Change Password">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/email') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeemail.gif') }}" alt="Change Email">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/rename') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_renameaccount.gif') }}" alt="Rename Account">
                                </a>
                            </td>
                            <td width="5%"></td>
                            <td>
                                <a href="{{ url('/account/terminate') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_terminateaccount.gif') }}" alt="Terminate Account">
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
                        Products Available
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumtime.gif') }}" alt="Get Premium Time">
                            </a>

                            <strong>Premium Time</strong><br>
                            Buy low-priced Premium Time to add it to your own account.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremiumscroll.gif') }}" alt="Get Premium Scroll">
                            </a>

                            <strong>Premium Scrolls</strong><br>
                            Buy Premium Scrolls to transfer Premium Time to the game or to use it for your own account.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getextraservice.gif') }}" alt="Get Extra Service">
                            </a>

                            <strong>Extra Services</strong><br>
                            Buy an extra service to transfer a character to another game world, to change your character's name or sex, to change your account name, or to get a new recovery key.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getmount.gif') }}" alt="Get Mount">
                            </a>

                            <strong>Mounts</strong><br>
                            Buy your characters one or more of the fabulous mounts offered here.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="green-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getoutfit.gif') }}" alt="Get Outfit">
                            </a>

                            <strong>Outfits</strong><br>
                            Buy your characters one or more of the fancy outfits offered here.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_usegamecode.gif') }}" alt="Use Game Code">
                            </a>

                            <strong>Use Game Code</strong><br>
                            Enter your game code for Premium Time, Premium Scrolls or an Extra Service which you have purchased at one of our <a href="#">official resellers</a>.
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div id="products-ready" class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Products Ready To Use
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th width="85">Date</th>
                                <th>Voucher</th>
                                <th width="50"></th>
                            </tr>
                            <tr>
                                <td>Jan 27 2015</td>
                                <td>Double Experience and Skill Voucher</td>
                                <td align="center">[<a href="#">View</a>]</td>
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
                        History
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="View History">
                            </a>

                            <strong>Premium History</strong><br>
                            Contains all historical data about your Premium Scrolls and Premium Times.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="View History">
                            </a>

                            <strong>Payments History</strong><br>
                            Contains all historical data of your payments.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="View History">
                            </a>

                            <strong>Extra Services History</strong><br>
                            Contains all historical data about your Extra Services.
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner-box">
                            <a href="{{ url('/account') }}" class="blue-button" style="float: right;">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_viewhistory.gif') }}" alt="View History">
                            </a>

                            <strong>Vouchers History</strong><br>
                            Contains all historical data about your account vouchers.
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div id="registration" class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Registration
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
