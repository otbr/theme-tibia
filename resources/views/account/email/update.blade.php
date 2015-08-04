@extends('theme::app')

@title(trans('theme::account.email.update.title'))
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.email.update.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        @if ($account->isConfirmed())
                            {!! trans('theme::account.email.update.heading') !!}
                        @else
                            {!! trans('theme::account.email.update.changed') !!}
                        @endif
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    @if ($account->isConfirmed())
                        {!! trans('theme::account.email.update.confirmed', [
                            'email' => $account->properties->email(),
                            'days'  => config('pandaac.mail.timers.email-change'),
                        ]) !!}
                    @else
                        {!! trans('theme::account.email.update.unconfirmed', [
                            'email' => $account->email(),
                        ]) !!}
                    @endif
                </div>
            </div>

            <br>

            <table class="full-width">
                <tr>
                    <td class="text-center">
                        <a href="{{ url('/account/manage') }}" class="blue-button">
                            <span>{{ trans('theme::account.email.update.back') }}</span>
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
