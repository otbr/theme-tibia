@extends('theme::app')

@section('title', trans('theme::account/registration/create/registered.title'))
@section('body', 'account-registration account-registration-create-registered')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/registration/create/registered.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <h2 class="iconless">{!! trans('theme::account/registration/create/registered.preheading') !!}</h2>

                <progressbar>
                    <step class="scroll" completed>{!! trans('theme::account/registration/create/registered.date') !!}</step>
                    <step class="questionmark" completed>{!! trans('theme::account/registration/create/registered.verification') !!}</step>
                    <step class="checkmark" completed>{!! trans('theme::account/registration/create/registered.recoverykey') !!}</step>
                </progressbar>

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/registration/create/registered.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account/registration/create/registered.content', ['key' => $key]) !!}
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{!! trans('theme::account/registration/create/registered.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
