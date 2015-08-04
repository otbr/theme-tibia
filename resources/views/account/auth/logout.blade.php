@extends('theme::app')

@title(trans('theme::account.logout.title'))
@navigation('/account')
@bodyclass('account-logout')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.logout.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="table">
                <header class="header">
                    <div class="borders">
                        <span class="edges top"></span>
                        {!! trans('theme::account.logout.heading') !!}
                        <span class="edges bottom"></span>
                    </div>
                </header>

                <div class="content dark">
                    <table class="full">
                        <tr>
                            <td>
                                {!! trans('theme::account.logout.content', [
                                    'server'    => $server, 
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
