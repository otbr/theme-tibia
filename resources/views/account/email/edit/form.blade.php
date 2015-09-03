@extends('theme::app')

@section('title', trans('theme::account/email/edit/form.title'))
@section('body', 'account-email-edit-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/email/edit/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                @if ($account->isConfirmed())
                    {!! trans('theme::account/email/edit/form.preamble', ['days' => config('pandaac.apolune.account.emailchange-days')]) !!}
                @endif

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/email/edit/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th>{!! trans('theme::account/email/edit/form.email') !!}</th>
                                    <td><input type="email" name="email" size="30" maxlength="50" value="{{ old('email') }}"></td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/email/edit/form.password') !!}</th>
                                    <td><input type="password" name="password" size="30" maxlength="29"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/email/edit/form.submit') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                    <span>{!! trans('theme::account/email/edit/form.back') !!}</span>
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
