@extends('theme::app')

@section('title', trans('theme::account/registration/create/form.title'))
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/create/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <h2 class="iconless">{!! trans('theme::account/registration/create/form.preheading') !!}</h2>

                <progressbar>
                    <step class="scroll" completed>{!! trans('theme::account/registration/create/form.date') !!}</step>
                    <step class="questionmark">{!! trans('theme::account/registration/create/form.verification') !!}</step>
                    <step class="checkmark">{!! trans('theme::account/registration/create/form.recoverykey') !!}</step>
                </progressbar>

                @include('theme::errors')

                {!! trans('theme::account/registration/create/form.preamble', [
                    'server'    => server()->name(),
                    'privacy'   => url('/support/privacy'),
                ]) !!}

                <form method="POST" action="{{ url('/account/register/confirm') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/registration/create/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th style="width: 40%;" class="{{ $errors->has('firstname') ? 'error' : null }}">{!! trans('theme::account/registration/create/form.firstname') !!}</th>
                                    <td>
                                        <input type="text" name="firstname" size="30" maxlength="50" value="{{ old('firstname') }}">
                                    </td>
                                </tr>
                                @if ($errors->has('firstname'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('firstname') }}</small></td>
                                @endif
                                <tr>
                                    <th class="{{ $errors->has('surname') ? 'error' : null }}">{!! trans('theme::account/registration/create/form.surname') !!}</th>
                                    <td><input type="text" name="surname" size="30" maxlength="50" value="{{ old('surname') }}"></td>
                                </tr>
                                @if ($errors->has('surname'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('surname') }}</small></td>
                                @endif
                                <tr>
                                    <th class="{{ $errors->has('country') ? 'error' : null }}">{!! trans('theme::account/registration/create/form.country') !!}</th>
                                    <td>
                                        <select name="country">
                                            <option disabled {{ empty(old('country')) ? 'selected' : null }}>---</option>
                                            @if (! empty($popular))
                                                @foreach ($popular as $country)
                                                    <option value="{{ $country['country'] }}">{{ country($country['country']) }}</option>
                                                @endforeach

                                                <option disabled>=========================</option>
                                            @endif

                                            @foreach ($countries as $code => $country)
                                                <option value="{{ $code }}" {{ $code === old('country') ? 'selected' : null }}>{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                @if ($errors->has('country'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('country') }}</small></td>
                                @endif
                                <tr>
                                    <th class="{{ ($errors->has('day') or $errors->has('month') or $errors->has('year')) ? 'error' : null }}">{!! trans('theme::account/registration/create/form.birthday') !!}</th>
                                    <td>
                                        <select name="day">
                                            <option disabled {{ empty(old('day')) ? 'selected' : null }}>---</option>
                                            @foreach (range(1, 31) as $day)
                                                <option {{ $day == old('day') ? 'selected' : null }}>{{ $day }}</option>
                                            @endforeach
                                        </select>

                                        <select name="month">
                                            <option disabled {{ empty(old('month')) ? 'selected' : null }}>---</option>
                                            @foreach (range(1, 12) as $month)
                                                <option value="{{ $month }}" {{ $month == old('month') ? 'selected' : null }}>{{ month($month) }}</option>
                                            @endforeach
                                        </select>

                                        <select name="year">
                                            <option disabled {{ empty(old('year')) ? 'selected' : null }}>---</option>
                                            @foreach ($years as $year)
                                                <option {{ $year == old('year') ? 'selected' : null }}>{{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                @if ($errors->has('day') or $errors->has('month') or $errors->has('year'))
                                    <th></th>
                                    <td class="error">
                                        @if ($errors->has('day'))
                                            <small>{{ $errors->first('day') }}</small><br>
                                        @endif

                                        @if ($errors->has('month'))
                                            <small>{{ $errors->first('month') }}</small><br>
                                        @endif

                                        @if ($errors->has('year'))
                                            <small>{{ $errors->first('year') }}</small>
                                        @endif
                                    </td>
                                @endif
                                <tr>
                                    <th class="{{ $errors->has('gender') ? 'error' : null }}">{!! trans('theme::account/registration/create/form.gender') !!}</th>
                                    <td>
                                        <select name="gender">
                                            <option disabled {{ empty(old('gender')) ? 'selected' : null }}>---</option>
                                            <option value="female" {{ old('gender') === 'female' ? 'selected' : null }}>{!! trans('theme::account/registration/create/form.female') !!}</option>
                                            <option value="male" {{ old('gender') === 'male' ? 'selected' : null }}>{!! trans('theme::account/registration/create/form.male') !!}</option>
                                        </select>
                                    </td>
                                </tr>
                                @if ($errors->has('gender'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('gender') }}</small></td>
                                @endif
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/registration/create/form.continue') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <span>{!! trans('theme::account/registration/create/form.back') !!}</span>
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
