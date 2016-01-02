@extends('theme::app')

@section('title', trans('theme::news/archive/form.title'))
@section('body', 'news-archive')
@section('navigation', '/archive')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/archive/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                @include('theme::errors')

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::news/archive/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped inverse dark">
                                    <tr>
                                        <th class="text-center">{!! trans('theme::news/archive/form.period') !!}</th>
                                        <th class="text-center">{!! trans('theme::news/archive/form.type') !!}</th>
                                        <th class="text-center">{!! trans('theme::news/archive/form.category') !!}</th>
                                    </tr>
                                    <tr>
                                        <td class="valign-middle">
                                            <table class="normalise">
                                                <tr>
                                                    <td colspan="4" style="height: 10px;"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="{{ $errors->has('from_day') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/form.day') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('from_month') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/form.month') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('from_year') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/form.year') !!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right {{ $errors->has('date') ? 'error' : null }}">{!! trans('theme::news/archive/form.from') !!}</td>
                                                    <td>
                                                        <select name="from_day">
                                                            @foreach (range(1, 31) as $day)
                                                                <option {{ $day == old('from_day', Carbon\Carbon::now()->subDays(30)->format('j')) ? 'selected' : null }}>{{ $day }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="from_month">
                                                            @foreach (range(1, 12) as $month)
                                                                <option {{ $month == old('from_month', Carbon\Carbon::now()->subMonth(1)->format('n')) ? 'selected' : null }}>{{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="from_year">
                                                            @foreach (range($initialYear, date('Y')) as $year)
                                                                <option {{ $year == old('from_year', $fromYear) ? 'selected' : null }}>{{ $year }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="height: 10px;"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="{{ $errors->has('to_day') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/results.form.day') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('to_month') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/results.form.month') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('to_year') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/results.form.year') !!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right {{ $errors->has('date') ? 'error' : null }}">{!! trans('theme::news/archive/form.to') !!}</td>
                                                    <td>
                                                        <select name="to_day">
                                                            @foreach (range(1, 31) as $day)
                                                                <option {{ $day == old('to_day', Carbon\Carbon::now()->format('j')) ? 'selected' : null }}>{{ $day }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="to_month">
                                                            @foreach (range(1, 12) as $month)
                                                                <option {{ $month == old('to_month', Carbon\Carbon::now()->format('n')) ? 'selected' : null }}>{{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="to_year">
                                                            @foreach (range($initialYear, date('Y')) as $year)
                                                                <option {{ $year == old('to_year', date('Y')) ? 'selected' : null }}>{{ $year }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="height: 10px;"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="valign-middle">
                                            <label>
                                                <input type="checkbox" name="type[]" value="ticker" {{ in_array('ticker', old('type', ['ticker'])) ? 'checked' : null }}>
                                                {!! trans('theme::news/archive/form.newsticker') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="type[]" value="article" {{ in_array('article', old('type', ['article'])) ? 'checked' : null }}>
                                                {!! trans('theme::news/archive/form.featured') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="type[]" value="news" {{ in_array('news', old('type', ['news'])) ? 'checked' : null }}>
                                                {!! trans('theme::news/archive/form.news') !!}
                                            </label>
                                        </td>
                                        <td class="valign-middle">
                                            <label>
                                                <input type="checkbox" name="icon[]" value="staff" {{ in_array('staff', old('icon', ['staff'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_staff_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/form.staff') }}">
                                                {!! trans('theme::news/archive/form.staff') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="community" {{ in_array('community', old('icon', ['community'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_community_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/form.community') }}">
                                                {!! trans('theme::news/archive/form.community') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="development" {{ in_array('development', old('icon', ['development'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_development_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/form.development') }}">
                                                {!! trans('theme::news/archive/form.development') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="support" {{ in_array('support', old('icon', ['support'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_support_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/form.support') }}">
                                                {!! trans('theme::news/archive/form.support') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="technical" {{ in_array('technical', old('icon', ['technical'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_technical_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/form.technical') }}">
                                                {!! trans('theme::news/archive/form.technical') !!}
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <br>

                    <button class="blue-button">
                        <span>{!! trans('theme::news/archive/form.submit') !!}</span>
                    </button>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
