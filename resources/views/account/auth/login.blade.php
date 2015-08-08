@extends('theme::app')

@section('title', trans('theme::account/auth/login.title'))
@section('body', 'account-auth-login')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/auth/login.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/auth/login.heading') !!}
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
                                            <span>{{ trans('theme::account/auth/login.login') }}</span>
                                        </button>
                                        <a href="{{ url('/account/recover') }}" class="blue-button">
                                            <span>{{ trans('theme::account/auth/login.lost') }}</span>
                                        </a>
                                    </div>

                                    <table>
                                        <tr>
                                            <th><strong class="{{ $errors->has() ? 'error' : null }}">{!! trans('theme::account/auth/login.name') !!}</strong></th>
                                            <td><input type="password" name="name" size="35" maxlength="30"></td>
                                        </tr>
                                        <tr>
                                            <th><strong class="{{ $errors->has() ? 'error' : null }}">{!! trans('theme::account/auth/login.password') !!}</strong></th>
                                            <td><input type="password" name="password" size="35" maxlength="29"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <h1>{!! trans('theme::account/auth/login.new.heading', ['server' => server()->name()]) !!}</h1>
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/auth/login.new.player') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <div class="information">
                                    <div class="buttons-right">
                                        <a href="{{ url('/account/create') }}" class="medium-button">
                                            <img src="{{ asset('/pandaac/theme-tibia/img/mediumbutton_createaccount.png') }}" alt="{{ trans('theme::account/auth/login.new.create') }}">
                                        </a>
                                    </div>

                                    <strong>{!! trans('theme::account/auth/login.new.server', ['server' => server()->name()]) !!}</strong>
                                    <p class="indent">{!! trans('theme::account/auth/login.new.one') !!}</p>
                                    <p class="indent">{!! trans('theme::account/auth/login.new.two') !!}</p>
                                    <p class="indent">{!! trans('theme::account/auth/login.new.three') !!}</p>
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
