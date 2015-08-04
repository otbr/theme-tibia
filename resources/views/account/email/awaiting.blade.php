@extends('theme::app')

@title(trans('theme::account.email.awaiting.title'))
@navigation('/account')
@bodyclass('account-email')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.email.awaiting.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.email.awaiting.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account.email.awaiting.content', [
                            'email' => $account->properties->email(),
                            'date'  => $account->properties->emailDate(),
                        ]) !!}
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="blue-button">
                                <span>{{ trans('theme::account.email.awaiting.cancel') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <span>{{ trans('theme::account.email.awaiting.back') }}</span>
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
