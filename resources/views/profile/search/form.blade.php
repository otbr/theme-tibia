@extends('theme::app')

@section('title', trans('theme::profile/search/form.title'))
@section('body', 'characters')
@section('navigation', '/characters')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::profile/search/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::profile/search/form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <form method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <table>
                                        <tr>
                                            <th>
                                                <label for="name">
                                                    <strong>{!! trans('theme::profile/search/form.name') !!}</strong>
                                                </label>
                                            </th>
                                            <td>
                                                <input type="text" name="name" id="name" size="35" maxlength="30" value="{{ old('name') }}">

                                                <button class="blue-button">
                                                    <span>{!! trans('theme::profile/search/form.submit') !!}</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
