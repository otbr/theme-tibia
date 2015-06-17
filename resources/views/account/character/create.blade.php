@extends('theme::app')

@section('title', 'Account Management')
@section('body', 'account-character')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>Please choose a name and sex for your character as well as the game world on which you want the character to live. If you cannot think of any fantasy names, click on the link below the name field to get some suggestions for a name.</p>

            <p>In any case the name must not violate the naming conventions stated in the <a href="{{ url('/support/rules') }}">{{ server()->name() }} Rules</a>, or your character might get deleted or name locked.</p>
            
            <br>

            @include('theme::modules.errors')
            
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            Create Character
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <th width="20%"><strong class="{{ $errors->has('player') ? 'error' : null }}">Name</strong></th>
                                    <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">Sex</strong></th>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <input type="text" name="player" size="35" maxlength="30" id="name-suggestion" value="{{ old('player') }}"><br>
                                        <small>[<a href="#" id="suggest-name">suggest name</a>]</small>
                                    </td>
                                    @if (count($genders = genders()) > 1)
                                        <td>
                                            @foreach ($genders as $gender)
                                                <label>
                                                    <input type="radio" name="sex" value="{{ $gender->id() }}" {{ old('sex', 1) == $gender->id() ? 'checked' : null }}> 
                                                    {{ $gender->name() }}
                                                </label>
                                                <br>
                                            @endforeach
                                        </td>
                                    @endif
                                </tr>
                            </table>
                        </div>

                        @if (count($vocations = vocations(true)) > 1)
                            <div class="box">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <th width="20%" valign="top"><p><strong class="{{ $errors->has('vocation') ? 'error' : null }}">Vocation:</strong></p></th>
                                        <td>
                                            <?php $first = $vocations->first()->id(); ?>
                                            @foreach ($vocations as $vocation)
                                                <label>
                                                    <input type="radio" name="vocation" value="{{ $vocation->id() }}" {{ old('vocation', $first) == $vocation->id() ? 'checked' : null }}> 
                                                    {{ $vocation->name() }}
                                                </label>
                                                &nbsp;
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @endif
                        
                        @if ($worlds = worlds() and $worlds->count() > 1)
                            <div class="box">
                                <div class="inner-box">
                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <th width="20%" valign="top"><p><strong class="{{ $errors->has('world') ? 'error' : null }}">World:</strong></p></th>
                                            <td>
                                                <?php $random = $worlds->random()->id(); ?>
                                                @foreach ($worlds as $key => $world)
                                                    <p>
                                                        <label>
                                                            <input type="radio" name="world" value="{{ $world->id() }}" {{ old('world', $random) == $world->id() ? 'checked' : null }}> 

                                                            @if ($flag = $world->flag())
                                                                <img src="{{ config('pandaac.theme-tibia.paths.flags') }}/{{ $flag }}.gif" alt="{{ strtoupper($flag) }}" title="{{ country($flag) }}" class="flag">
                                                            @endif

                                                            {{ $world->name() }} 
                                                            <small>({{ $world->type() }})</small>
                                                        </label>
                                                    </p>
                                                @endforeach
                                                
                                                <p><small>[<a href="#" id="suggest-world">suggest game world</a>]</small></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <br>

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
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
