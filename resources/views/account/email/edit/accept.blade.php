@extends('theme::app')

@section('title', trans('theme::account/email/edit/accept.title'))
@section('body', 'account-email-edit-accept')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/email/edit/accept.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/email/edit/accept.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            {!! trans('theme::account/email/edit/accept.content', [
                                'email' => e($account->properties->email()),
                            ]) !!}
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/email/edit/accept.accept') !!}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/email/cancel') }}" class="blue-button">
                                    <span>{!! trans('theme::account/email/edit/accept.cancel') !!}</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                    <span>{!! trans('theme::account/email/edit/accept.back') !!}</span>
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
