@extends('theme::app')

@section('title', 'Account Management')
@section('body', 'account-character-name')
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

            <p>Please enter the new name for your character. Note that also your new name must not violate the naming conventions stated in the <a href="{{ url('/support/rules') }}">{{ server()->name() }} Rules</a> or your character will get name locked and your account might be punished.</p>

            <form method="POST" action="{{ url('/account/character', [$player->id, 'name']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Change Character Name
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th>Current Character Name:</th>
                                <td>{{ $player->name }}</td>
                            </tr>
                            <tr>
                                <th>New Character Name:</th>
                                <td><input type="text" name="name" size="30" maxlength="29"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="green-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="Submit">
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/character', [$player->id, 'edit']) }}" class="blue-button">
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
