@extends('theme::app')

@title('Account Management')
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        New Email Address Requested
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    You have requested to change your email address to <strong>{{ $account->emailChange() }}</strong>. The actual change will take place after a waiting period of {{ config('pandaac.timers.email-change') }} days, during which you can cancel the request at any time.
                </div>
            </div>

            <br>

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td align="center">
                        <a href="{{ url('/account/manage') }}" class="blue-button">
                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="Back">
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
