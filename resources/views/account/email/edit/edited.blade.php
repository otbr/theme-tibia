@extends('theme::app')

@section('title', trans('theme::account/email/edit/edited.title'))
@section('body', 'account-email-edit-edited')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/email/edit/edited.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            @if ($account->isConfirmed())
                                {!! trans('theme::account/email/edit/edited.heading') !!}
                            @else
                                {!! trans('theme::account/email/edit/edited.changed') !!}
                            @endif
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        @if ($account->isConfirmed())
                            {!! trans('theme::account/email/edit/edited.confirmed', [
                                'email' => e($account->properties->email()),
                                'days'  => config('pandaac.apolune.account.emailchange-days'),
                            ]) !!}
                        @else
                            {!! trans('theme::account/email/edit/edited.unconfirmed', [
                                'email' => e($account->email()),
                            ]) !!}
                        @endif
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <span>{!! trans('theme::account/email/edit/edited.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
