@extends('theme::app')

@title(trans('theme::account.email.cancelled.title'))
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.email.cancelled.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.email.cancelled.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    {!! trans('theme::account.email.cancelled.content') !!}
                </div>
            </div>

            <br>

            <table class="full-width">
                <tr>
                    <td class="text-center">
                        <a href="{{ url('/account/manage') }}" class="blue-button">
                            <span>{{ trans('theme::account.email.cancelled.back') }}</span>
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
