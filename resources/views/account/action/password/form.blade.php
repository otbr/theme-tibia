@extends('theme::app')

@section('title', trans('theme::account/action/password/form.title'))
@section('body', 'account-action-password-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/action/password/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/action/password/form.preamble') !!}

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/action/password/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th>{!! trans('theme::account/action/password/form.new') !!}</th>
                                    <td><input type="password" name="password" size="30" maxlength="29"></td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/action/password/form.confirmation') !!}</th>
                                    <td><input type="password" name="password_confirmation" size="30" maxlength="29"></td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/action/password/form.current') !!}</th>
                                    <td><input type="password" name="current" size="30" maxlength="29"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/action/password/form.submit') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                    <span>{!! trans('theme::account/action/password/form.back') !!}</span>
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
