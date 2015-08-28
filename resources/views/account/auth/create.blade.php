@extends('theme::app')

@section('title', trans('theme::account/auth/create.title'))
@section('body', 'account-auth-create')
@section('navigation', '/account/create')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/auth/create.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')
                
                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/auth/create.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <div class="inner-box">
                                    <table class="full-width">
                                        <tr>
                                            <th style="width: 20%;"><strong data-v-class="error: (typeof errors.account !== 'boolean' || (errors.account !== false && {{ $errors->has('name') ? 'true' : 'false' }}))">{!! trans('theme::account/auth/create.account') !!}</strong></th>
                                            <td>
                                                <input type="text" name="name" size="35" maxlength="30" value="{{ old('name') }}" data-v-model="account" data-v-on="change: validateAccount"> &nbsp;
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" alt="false" data-v-show="errors.account">
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" alt="true" data-v-show="! errors.account">
                                            </td>
                                        </tr>
                                        <tr data-v-show="typeof errors.account !== 'boolean'">
                                            <th></th>
                                            <td><small class="error">@{{ errors.account }}</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                        <tr>
                                            <th><strong data-v-class="error: (typeof errors.email !== 'boolean' || (errors.email !== false && {{ $errors->has('email') ? 'true' : 'false' }}))">{!! trans('theme::account/auth/create.email') !!}</strong></th>
                                            <td>
                                                <input type="email" name="email" size="35" maxlength="50" value="{{ old('email') }}" data-v-model="email" data-v-on="change: validateEmail"> &nbsp;
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" alt="false" data-v-show="errors.email">
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" alt="true" data-v-show="! errors.email">
                                            </td>
                                        </tr>
                                        <tr data-v-show="typeof errors.email !== 'boolean'">
                                            <th></th>
                                            <td><small class="error">@{{ errors.email }}</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                        <tr>
                                            <th><strong data-v-class="error: (typeof errors.password !== 'boolean' || (errors.password !== false && {{ $errors->has('password') ? 'true' : 'false' }}))">{!! trans('theme::account/auth/create.password') !!}</strong></th>
                                            <td>
                                                <input type="password" name="password" size="35" maxlength="29" data-v-model="password" data-v-on="change: validatePassword"> &nbsp;
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" alt="false" data-v-show="errors.password">
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" alt="true" data-v-show="! errors.password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                        <tr>
                                            <th><strong data-v-class="error: (typeof errors.password !== 'boolean' || (errors.password !== false && {{ $errors->has('password') ? 'true' : 'false' }}))">{!! trans('theme::account/auth/create.confirmation') !!}</strong></th>
                                            <td>
                                                <input type="password" name="password_confirmation" size="35" maxlength="29" data-v-model="confirmation" data-v-on="change: validatePassword"> &nbsp;
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" alt="false" data-v-show="errors.password">
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" alt="true" data-v-show="! errors.password">
                                            </td>
                                        </tr>
                                        <tr data-v-show="typeof errors.password !== 'boolean'">
                                            <th></th>
                                            <td><small class="error">@{{ errors.password }}</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="box">
                                <div class="inner-box">
                                    <table class="full-width">
                                        <tr>
                                            <th style="width: 20%;"><strong data-v-class="error: (typeof errors.name !== 'boolean' || (errors.name !== false && {{ $errors->has('player') ? 'true' : 'false' }}))">{!! trans('theme::account/auth/create.player') !!}</strong></th>
                                            <td>
                                                <input type="text" name="player" size="35" maxlength="30" id="name-suggestion" value="{{ old('player') }}" data-v-model="name" data-v-on="change: validateName"> &nbsp;
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/nok.gif') }}" alt="false" data-v-show="errors.name">
                                                <img class="valign-middle" src="{{ asset('/pandaac/theme-tibia/img/ok.gif') }}" alt="true" data-v-show="! errors.name">
                                            </td>
                                        </tr>
                                        <tr data-v-show="typeof errors.name !== 'boolean'">
                                            <th></th>
                                            <td><small class="error">@{{ errors.name }}</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td><small>[<a href="#" id="suggest-name" data-v-on="click: suggestName">{!! trans('theme::account/auth/create.suggestname') !!}</a>]</small></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                        @if (count($genders = genders()) > 1)
                                            <tr>
                                                <td colspan="2" style="height: 4px;"></td>
                                            </tr>
                                            <tr>
                                                <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">{!! trans('theme::account/auth/create.sex') !!}</strong></th>
                                                <td>
                                                    @foreach ($genders as $gender)
                                                        <label>
                                                            <input type="radio" name="sex" value="{{ $gender->id() }}" {{ old('sex', 1) == $gender->id() ? 'checked' : null }}> 
                                                            {{ $gender->name() }}
                                                        </label>
                                                        &nbsp;
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td colspan="2" style="height: 4px;"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            @if ($vocations = vocations(true) and $vocations->count() > 1)
                                <?php $first = $vocations->first()->id(); ?>

                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('vocation') ? 'error' : null }}">{!! trans('theme::account/auth/create.vocation') !!}</strong></p></th>
                                                <td>
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
                                </div>
                            @endif

                            @if ($towns = towns(true) and $towns->count() > 1)
                                <?php $first = $towns->first()->id(); ?>

                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('town') ? 'error' : null }}">{!! trans('theme::account/auth/create.town') !!}</strong></p></th>
                                                <td>
                                                    @foreach ($towns as $town)
                                                        <label>
                                                            <input type="radio" name="town" value="{{ $town->id() }}" {{ old('town', $first) == $town->id() ? 'checked' : null }}> 
                                                            {{ $town->name() }}
                                                        </label>
                                                        &nbsp;
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            
                            @if ($worlds = worlds() and $worlds->count() > 1)
                                <?php $random = $worlds->random()->id(); ?>
                                
                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('world') ? 'error' : null }}">{!! trans('theme::account/auth/create.world') !!}</strong></p></th>
                                                <td>
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
                                                    
                                                    <p><small>[<a href="#" id="suggest-world" data-v-on="click: suggestWorld">{!! trans('theme::account/auth/create.suggestworld') !!}</a>]</small></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="box">
                                <div class="inner-box">
                                    <p>
                                        <strong>{!! trans('theme::account/auth/create.terms') !!}</strong><br>
                                        <input type="checkbox" name="terms" value="1">

                                        {!! trans('theme::account/auth/create.accept', [
                                            'server'    => server()->name(), 
                                            'terms'     => url('/support/terms'),
                                            'rules'     => url('/support/rules'),
                                            'privacy'   => url('/support/privacy'),
                                        ]) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <button class="blue-button">
                        <span>{!! trans('theme::account/auth/create.submit') !!}</span>
                    </button>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
