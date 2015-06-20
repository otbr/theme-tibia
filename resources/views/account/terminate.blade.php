@extends('theme::app')

@section('title', 'Account Management')
@section('body', 'account-terminate')
@section('navigation', '/account')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <p>Do you really want to terminate your {{ server()->name() }} account and delete all of your characters?</p>

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Terminate Account
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th>Password:</th>
                                <td><input type="password" name="password" size="30" maxlength="29"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="Submit">
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
