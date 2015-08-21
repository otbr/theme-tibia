@extends('theme::app')

@section('title', trans('theme::account/registration/create/confirm.title'))
@section('body', 'account-registration account-registration-create-confirm')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/create/confirm.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <h2 class="iconless">{!! trans('theme::account/registration/create/confirm.preheading') !!}</h2>

                <progressbar>
                    <step class="scroll" completed>{!! trans('theme::account/registration/create/confirm.date') !!}</step>
                    <step class="questionmark" completed>{!! trans('theme::account/registration/create/confirm.verification') !!}</step>
                    <step class="checkmark">{!! trans('theme::account/registration/create/confirm.recoverykey') !!}</step>
                </progressbar>

                @include('theme::errors')

                {!! trans('theme::account/registration/create/confirm.preamble') !!}

                <form method="POST" action="{{ url('/account/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="firstname" value="{{ old('firstname') }}">
                    <input type="hidden" name="surname" value="{{ old('surname') }}">
                    <input type="hidden" name="country" value="{{ old('country') }}">
                    <input type="hidden" name="day" value="{{ old('day') }}">
                    <input type="hidden" name="month" value="{{ old('month') }}">
                    <input type="hidden" name="year" value="{{ old('year') }}">
                    <input type="hidden" name="gender" value="{{ old('gender') }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/registration/create/confirm.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th style="width: 20%;">{!! trans('theme::account/registration/create/confirm.firstname') !!}</th>
                                    <td>{{ old('firstname') }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/create/confirm.surname') !!}</th>
                                    <td>{{ old('surname') }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/create/confirm.country') !!}</th>
                                    <td>{{ country(old('country')) }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/create/confirm.birthday') !!}</th>
                                    <td>{{ month(old('month')) }} {{ old('day') }} {{ old('year') }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/create/confirm.gender') !!}</th>
                                    <td>{{ gender(old('gender'))->name() }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <br>
                                        {!! trans('theme::account/registration/create/confirm.confirmation') !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/create/confirm.password') !!}</th>
                                    <td><input type="password" name="password" size="30"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/registration/create/confirm.submit') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/register') }}" class="blue-button">
                                    <span>{!! trans('theme::account/registration/create/confirm.back') !!}</span>
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
