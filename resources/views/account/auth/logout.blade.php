@extends('theme::app')

@title('Account Management')
@navigation('/account')
@bodyclass('account-logout')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Logout Successful
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td>You have logged out of your {{ server()->name() }} account. In order to view your account you need to <a href="{{ url('/account/login') }}">log in</a> again.</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
