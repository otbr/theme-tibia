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

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Change of Email Address
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        A request has been submitted to change the email address of this account to <strong>{{ account()->emailChange() }}</strong>.<br>
                        The actual change will take place on <strong>{{ account()->emailChangeDate() }}</strong>.<br>
                        If you do not want to change your email address, please click on "Cancel".
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_cancel.gif') }}" alt="Cancel">
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="Back">
                            </a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
