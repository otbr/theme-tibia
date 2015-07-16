@extends('theme::app')

@title(trans('theme::account.email.request.title'))
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.email.request.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    {!! trans('theme::account.email.request.content', [
                        'email' => $account->properties->email(),
                        'days'  => config('pandaac.mail.timers.email-change'),
                    ]) !!}
                </div>
            </div>

            <br>

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td align="center">
                        <a href="{{ url('/account/manage') }}" class="blue-button">
                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="{{ trans('theme::account.email.request.back') }}">
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
