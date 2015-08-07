@extends('theme::app')

@title(trans('theme::account/auth/logout.title'))
@navigation('/account')
@bodyclass('account-logout')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account/auth/logout.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account/auth/logout.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    <table class="full-width">
                        <tr>
                            <td>
                                {!! trans('theme::account/auth/logout.content', [
                                    'server'    => server()->name(), 
                                    'url'       => url('/account/login'),
                                ]) !!}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
