@extends('theme::app')

@section('title', trans('theme::highscore/form.title'))
@section('navigation', '/highscore')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::highscore/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::highscore/form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <form method="POST" action="{{ url('/highscore') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <table class="full-width">
                                <tr>
                                    <th style="width: 1%;">{!! trans('theme::highscore/form.world') !!}</th>
                                    <td>
                                        <select name="world">
                                            <option disabled selected>{!! trans('theme::highscore/form.default') !!}</option>
                                            @foreach ($worlds as $option)
                                                <option value="{{ $option->slug() }}">{{ $option->name() }}</option>
                                            @endforeach
                                        </select>

                                        &nbsp;

                                        <button class="blue-button">
                                            <span>{!! trans('theme::highscore/form.submit') !!}</span>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
