@extends('theme::app')

@section('title', 'Account Management')
@section('body', 'account-character-world')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <p>Before you initiate a transfer of your character to another game world, please make sure that you are aware of the following points:</p>

            <ul>
                <li>In case you get a red or black skull or a final warning after having paid for a pending character world transfer, you will have to wait until the final warning or the skull mark have been gone before you can move to the new game world.</li>
                <li>Note that you can only move to game worlds with stricter or the same PvP rules. Therefore, if you move your character to an optional PvP game world, it will be impossible to move it back to an open or hardcore PvP game world at a later point.</li>
                <li>If you move to a new game world make sure that you select one that is close to your home. If a Brazilian player moves from a game world located in the USA to one located in Europe, he will very likely experience a worse connection than before.</li>
            </ul>

            <p>In order to transfer your character to another game world, you have to fulfil the following requirements:</p>

            <ul>
                <li class="yes">Character has not been transferred within the last 6 months.</li>
                <li class="no">Conduct level is low enough.</li>
                <li class="yes">Character is not a member of a guild.</li>
                <li class="yes">Character is not married.</li>
                <li class="no">Character owns no house.</li>
                <li class="no">You have left the beginner's island.</li>
            </ul>

            <form method="POST" action="{{ url('/account/character', [$player->id, 'world']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Character Data
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th>Name:</th>
                                    <th>Current World:</th>
                                    <th>Possible Target World:</th>
                                    <th>Requirement Status:</th>
                                </tr>
                                <tr>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->world()->name() }} ({{ $player->world()->type() }})</td>
                                    <td>
                                        <select name="world">
                                            <option>(select your target game world)</option>
                                            @foreach ($worlds as $world)
                                                <option value="{{ $world->id() }}">{{ $world->name() }} ({{ $world->type() }})</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><strong class="green">available</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="green-button">
                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_continue.gif') }}" alt="Continue">
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
