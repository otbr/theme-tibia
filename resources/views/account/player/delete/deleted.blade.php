@extends('theme::app')

@section('title', trans('theme::account/player/delete/deleted.title'))
@section('body', 'account-player-delete-deleted')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/player/delete/deleted.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/player/delete/deleted.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <p>
                            {!! trans('theme::account/player/delete/deleted.content', [
                                'name' => $player->name(),
                                'date' => $player->properties->deletedAt(),
                            ]) !!}
                        </p>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/account') }}" class="blue-button">
                                <span>{!! trans('theme::account/player/delete/deleted.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
