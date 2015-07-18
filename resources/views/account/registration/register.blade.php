@extends('theme::app')

@title(trans('theme::account.register.key.title'))
@navigation('/account')
@bodyclass('account-register')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h2 class="iconless">{!! trans('theme::account.register.key.preheading') !!}</h2>

            <progressbar>
                <step class="scroll" completed>{!! trans('theme::account.register.key.date') !!}</step>
                <step class="questionmark" completed>{!! trans('theme::account.register.key.verification') !!}</step>
                <step class="checkmark" completed>{!! trans('theme::account.register.key.recoverykey') !!}</step>
            </progressbar>

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.register.key.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    {!! trans('theme::account.register.key.content', ['key' => $key]) !!}
                </div>
            </div>

            <br>

            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td align="center">
                        <a href="{{ url('/account') }}" class="blue-button">
                            <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_back.gif') }}" alt="{{ trans('theme::account.register.key.back') }}">
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
