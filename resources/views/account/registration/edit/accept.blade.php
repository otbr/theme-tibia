@extends('theme::app')

@section('title', trans('theme::account/registration/edit/accept.title'))
@section('body', 'account-registration account-registration-accept')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/edit/accept.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/registration/edit/accept.preamble') !!}

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/registration/edit/accept.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th style="width: 40%;">{!! trans('theme::account/registration/edit/accept.firstname') !!}</th>
                                    <td>{{ $account->registration->requestFirstname() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/edit/accept.surname') !!}</th>
                                    <td>{{ $account->registration->requestSurname() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/registration/edit/accept.country') !!}</th>
                                    <td>{{ $account->registration->requestCountry() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <a href="{{ url('/account/register/cancel') }}" class="blue-button">
                                    <span>{!! trans('theme::account/registration/edit/accept.cancel') !!}</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/registration/edit/accept.accept') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <span>{!! trans('theme::account/registration/edit/accept.back') !!}</span>
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
