@extends('theme::app')

@section('title', trans('theme::404.title'))

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::404.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::404.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <p>
                            {!! trans('theme::404.content') !!}
                        </p>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/') }}" class="blue-button">
                                <span>{!! trans('theme::404.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
