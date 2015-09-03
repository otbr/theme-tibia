@extends('theme::app')

@section('title', trans('theme::account/registration/edit/request.title'))
@section('body', 'account-registration account-registration-accept')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/edit/request.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/registration/edit/request.preamble', [
                    'date' => $account->registration->requestDate()->format('M d Y, H:i:s e'),
                ]) !!}

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/registration/edit/request.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th style="width: 40%;">{!! trans('theme::account/registration/edit/request.firstname') !!}</th>
                                <td>{{ $account->registration->requestFirstname() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account/registration/edit/request.surname') !!}</th>
                                <td>{{ $account->registration->requestSurname() }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account/registration/edit/request.country') !!}</th>
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
                                <span>{!! trans('theme::account/registration/edit/request.cancel') !!}</span>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{!! trans('theme::account/registration/edit/request.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
