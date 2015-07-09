@extends('theme::app')

@title('Account Management')
@navigation('/account')
@bodyclass('account-character-sex')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'sex']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Change Character Sex
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        Do you really want to change the sex of your character <strong>{{ $player->name() }}</strong>?
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="green-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_yes.gif') }}" alt="Yes">
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
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
