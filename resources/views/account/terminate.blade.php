@extends('theme::app')

@title(trans('theme::account.terminate.title'))
@navigation('/account')
@bodyclass('account-terminate')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.terminate.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account.terminate.preamble', compact('server')) !!}

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.terminate.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table>
                            <tr>
                                <th>{!! trans('theme::account.terminate.password') !!}</th>
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
                                <span>{{ trans('theme::account.terminate.submit') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <span>{{ trans('theme::account.terminate.back') }}</span>
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
