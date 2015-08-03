@extends('theme::app')

@title(trans('theme::account.email.form.title'))
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.email.form.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            @if ($account->isConfirmed())
                {!! trans('theme::account.email.form.preamble', ['days' => config('pandaac.mail.timers.email-change')]) !!}
            @endif

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.email.form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <th>{!! trans('theme::account.email.form.email') !!}</th>
                                <td><input type="email" name="email" size="30" maxlength="50" value="{{ old('email') }}"></td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::account.email.form.password') !!}</th>
                                <td><input type="password" name="password" size="30" maxlength="29"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.email.form.submit') }}</span>
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <span>{{ trans('theme::account.email.form.back') }}</span>
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
