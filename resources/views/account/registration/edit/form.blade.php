@extends('theme::app')

@section('title', trans('theme::account/registration/edit/form.title'))
@section('body', 'account-registration account-registration-edit-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/edit/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/registration/edit/form.preamble') !!}

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/registration/edit/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th style="width: 40%;" class="{{ $errors->has('firstname') ? 'error' : null }}">{!! trans('theme::account/registration/edit/form.firstname') !!}</th>
                                    <td>
                                        <input type="text" name="firstname" size="30" maxlength="50" value="{{ old('firstname', account()->registration->firstname()) }}">
                                    </td>
                                </tr>
                                @if ($errors->has('firstname'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('firstname') }}</small></td>
                                @endif
                                <tr>
                                    <th class="{{ $errors->has('surname') ? 'error' : null }}">{!! trans('theme::account/registration/edit/form.surname') !!}</th>
                                    <td><input type="text" name="surname" size="30" maxlength="50" value="{{ old('surname', account()->registration->surname()) }}"></td>
                                </tr>
                                @if ($errors->has('surname'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('surname') }}</small></td>
                                @endif
                                <tr>
                                    <th class="{{ $errors->has('country') ? 'error' : null }}">{!! trans('theme::account/registration/edit/form.country') !!}</th>
                                    <td>
                                        <select name="country">
                                            <option disabled {{ empty(old('country', account()->registration->countryCode())) ? 'selected' : null }}>---</option>
                                            @if (! empty($popular))
                                                @foreach ($popular as $country)
                                                    <option value="{{ $country['country'] }}">{{ country($country['country']) }}</option>
                                                @endforeach

                                                <option disabled>=========================</option>
                                            @endif

                                            @foreach ($countries as $code => $country)
                                                <option value="{{ $code }}" {{ $code === old('country', account()->registration->countryCode()) ? 'selected' : null }}>{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                @if ($errors->has('country'))
                                    <th></th>
                                    <td class="error"><small>{{ $errors->first('country') }}</small></td>
                                @endif
                                <tr>
                                    <td colspan="2">
                                        <br>
                                        {!! trans('theme::account/registration/edit/form.confirmation') !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/edit/form.password') !!}</th>
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
                                    <span>{!! trans('theme::account/registration/edit/form.continue') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <span>{!! trans('theme::account/registration/edit/form.back') !!}</span>
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
