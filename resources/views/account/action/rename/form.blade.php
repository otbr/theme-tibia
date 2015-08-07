@extends('theme::app')

@section('title', trans('theme::account/action/rename/form.title'))
@section('body', 'account-action-rename-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/action/rename/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                {!! trans('theme::account/action/rename/form.preamble') !!}

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/action/rename/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <table>
                                <tr>
                                    <th>{!! trans('theme::account/action/rename/form.current') !!}</th>
                                    <td>{{ $account->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::account/action/rename/form.new') !!}</th>
                                    <td><input type="text" name="name" size="30" maxlength="29"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td class="text-center">
                                <button class="blue-button">
                                    <span>{{ trans('theme::account/action/rename/form.submit') }}</span>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ url('/account/manage') }}" class="blue-button">
                                    <span>{{ trans('theme::account/action/rename/form.back') }}</span>
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
