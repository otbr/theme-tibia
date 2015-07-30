@extends('theme::app')

@title(trans('theme::account.login.title'))
@navigation('/account')
@bodyclass('account-login')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.login.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')
            
            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.login.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <form method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="buttons-right">
                                    <button class="blue-button" style="margin-bottom: 2px;">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_login.gif') }}" alt="{{ trans('theme::account.login.login') }}">
                                    </button>
                                    <a href="{{ url('/account/recover') }}" class="blue-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_accountlost.gif') }}" alt="{{ trans('theme::account.login.lost') }}">
                                    </a>
                                </div>

                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <th><strong class="{{ $errors->has() ? 'error' : null }}">{!! trans('theme::account.login.name') !!}</strong></th>
                                        <td><input type="password" name="name" size="35" maxlength="30"></td>
                                    </tr>
                                    <tr>
                                        <th><strong class="{{ $errors->has() ? 'error' : null }}">{!! trans('theme::account.login.password') !!}</strong></th>
                                        <td><input type="password" name="password" size="35" maxlength="29"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <h1>{!! trans('theme::account.login.new.heading', compact('server')) !!}</h1>
            
            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.login.new.player') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content">
                    <div class="box">
                        <div class="inner-box">
                            <div class="information">
                                <div class="buttons-right">
                                    <a href="{{ url('/account/create') }}" class="medium-button">
                                        <img src="{{ asset('/pandaac/theme-tibia/img/mediumbutton_createaccount.png') }}" alt="{{ trans('theme::account.login.new.create') }}">
                                    </a>
                                </div>

                                <strong>{!! trans('theme::account.login.new.server', compact('server')) !!}</strong>
                                <p class="indent">{!! trans('theme::account.login.new.one') !!}</p>
                                <p class="indent">{!! trans('theme::account.login.new.two') !!}</p>
                                <p class="indent">{!! trans('theme::account.login.new.three') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
