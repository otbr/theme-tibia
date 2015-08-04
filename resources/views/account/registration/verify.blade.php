@extends('theme::app')

@title(trans('theme::account.register.verify.title'))
@navigation('/account')
@bodyclass('account-register')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.register.verify.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h2 class="iconless">{!! trans('theme::account.register.verify.preheading') !!}</h2>

            <progressbar>
                <step class="scroll" completed>{!! trans('theme::account.register.verify.date') !!}</step>
                <step class="questionmark" completed>{!! trans('theme::account.register.verify.verification') !!}</step>
                <step class="checkmark">{!! trans('theme::account.register.verify.recoverykey') !!}</step>
            </progressbar>

            @include('theme::modules.errors')

            {!! trans('theme::account.register.verify.preamble') !!}

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

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
                            {!! trans('theme::account.register.verify.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th style="width: 20%;">{!! trans('theme::account.register.verify.firstname') !!}</th>
                                <td>{{ old('firstname') }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.register.verify.surname') !!}</th>
                                <td>{{ old('surname') }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.register.verify.country') !!}</th>
                                <td>{{ country(old('country')) }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.register.verify.birthday') !!}</th>
                                <td>{{ $formatted }} {{ old('day') }} {{ old('year') }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.register.verify.gender') !!}</th>
                                <td>{!! old('gender') === 'male' ? trans('theme::account.register.verify.male') : trans('theme::account.register.verify.female') !!}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <br>
                                    {!! trans('theme::account.register.verify.confirmation') !!}
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.register.verify.password') !!}</th>
                                <td><input type="password" name="password" size="30"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table class="full">
                    <tr>
                        <td class="text-center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.register.verify.submit') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/register') }}" class="blue-button">
                                <span>{{ trans('theme::account.register.verify.back') }}</span>
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
