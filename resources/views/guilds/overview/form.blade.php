@extends('theme::app')

@section('title', trans('theme::guilds/overview/form.title'))
@section('navigation', '/guilds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::guilds/overview/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                {!! trans('theme::guilds/overview/form.preamble') !!}

                @include('theme::errors')

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::guilds/overview/form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <form method="POST" action="{{ url('/guilds') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <table class="full-width">
                                <tr>
                                    <th style="width: 1%;">{!! trans('theme::guilds/overview/form.world') !!}</th>
                                    <td>
                                        <select name="world">
                                            <option disabled selected>{!! trans('theme::guilds/overview/form.default') !!}</option>
                                            @foreach ($worlds as $option)
                                                <option value="{{ $option->slug() }}">{{ $option->name() }}</option>
                                            @endforeach
                                        </select>

                                        &nbsp;

                                        <button class="blue-button">
                                            <span>{!! trans('theme::guilds/overview/form.submit') !!}</span>
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
