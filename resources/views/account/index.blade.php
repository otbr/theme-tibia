@extends('theme::app')

@section('title', 'Account Management')
@section('body', 'account-index')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')
            
            <h2>Welcome to your account!</h2>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Account Status
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <div class="buttons-right">
                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_manageaccount.gif') }}" alt="Manage Account">
                                </a>
                                <a href="#" class="green-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="Get Premium">
                                </a>
                                <a href="{{ url('/account/logout') }}" class="red-button">
                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_logout.gif') }}" alt="Logout">
                                </a>
                            </div>

                            <table height="85" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td valign="middle" width="55">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/account-status_red.gif') }}">
                                    </td>
                                    <td valign="middle">
                                        <h4 class="free">Free Account</h4>
                                        <small>To benefit from our great premium features, get Premium Time for your account.</small>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        Characters
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <table class="table-striped table-hover" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th class="header" width="40"></th>
                                <th class="header">Name</th>
                                <th class="header" width="120">World</th>
                                <th class="header" width="90">Status</th>
                                <th class="header" width="90"></th>
                            </tr>

                            @forelse (account()->players as $i => $player)
                                <tr class="character {{ $i === 0 ? 'active' : null }}">
                                    <td align="center" valign="middle">
                                        <span class="play-integer">{{ ++$i }}.</span>
                                        <a href="#" class="play-button"></a>
                                    </td>
                                    <td valign="middle">
                                        <span>{{ $player->name }}</span>
                                        <small>{{ $player->vocation()->name() }} - Level {{ $player->level }}</small>
                                    </td>
                                    <td>{{ $player->world()->name() }}</td>
                                    <td>hidden</td>
                                    <td align="center">
                                        <div class="character-buttons">
                                            [<a href="{{ url('/account/character', [$player->id, 'edit']) }}">Edit</a>]
                                            [<a href="{{ url('/account/character', [$player->id, 'delete']) }}">Delete</a>]
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        No characters yet.
                                    </td>
                                </tr>
                            @endforelse
                        </table>
                    </div>

                    <div style="height: 31px;">
                        <div class="buttons-right">
                            <a href="{{ url('/account/character') }}" class="blue-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_createcharacter.gif') }}" alt="Create Character">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
