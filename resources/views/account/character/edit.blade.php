@extends('theme::app')

@section('title', 'Create Character')
@section('body', 'account-character-edit')

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
                                    [<a href="#character-data">Character Data</a>]
                                    [<a href="#character-information">Edit Character Information</a>]
                                </div>
                            </td>
                        </tr>
                    </table>
                    <span class="edges bottom"></span>
                </div>
            </div>

            <br>

            <p>Here you can see and edit the information about your character.<br>If you do not want to specify a certain field, just leave it blank.</p>

            @include('theme::modules.errors')
            
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div id="character-data" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Character Data
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table class="paddingless" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="10%"><strong class="{{ $errors->has('name') ? 'error' : null }}">Name:</strong></th>
                                        <td width="80%">{{ $player->name }}</td>
                                        <td align="right">
                                            <a href="{{ url('/account/character', [$player->id, 'name']) }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changename.gif') }}" alt="Change Name">
                                            </a>
                                        </td>
                                    </tr>
                                    @if ($world = $player->world())
                                        <tr>
                                            <th><strong class="{{ $errors->has('world') ? 'error' : null }}">World:</strong></th>
                                            <td>{{ $world->name() }}</td>
                                            <td align="right">
                                                <a href="{{ url('/account/character', [$player->id, 'world']) }}" class="blue-button">
                                                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changeworld.gif') }}" alt="Change World">
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">Sex:</strong></th>
                                        <td>{{ $player->gender()->name() }}</td>
                                        <td align="right">
                                            <a href="{{ url('/account/character', [$player->id, 'sex']) }}" class="blue-button">
                                                <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_changesex.gif') }}" alt="Change Sex">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div id="character-information" class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Edit Character Information
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="22%"><p><strong class="{{ $errors->has('hide') ? 'error' : null }}">Hide Account:</strong></p></th>
                                        <td>
                                            <p>
                                                <label>
                                                    <input type="checkbox"> check to hide your account information
                                                </label>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th valign="top"><p><strong class="{{ $errors->has('comment') ? 'error' : null }}">Comment:</strong></p></th>
                                        <td><p><textarea cols="50" rows="10"></textarea></p></td>
                                    </tr>
                                    <tr>
                                        <th valign="top"><p><strong class="{{ $errors->has('signature') ? 'error' : null }}">Forum Signature:</strong></p></th>
                                        <td><p><textarea cols="50" rows="4"></textarea></p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td width="50%" align="center">
                                    <button class="blue-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="Submit">
                                    </button>
                                </td>
                                <td width="50%" align="center">
                                    <a href="{{ url('/account') }}" class="blue-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="Submit">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
