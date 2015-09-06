@extends('theme::app')

@section('title', trans('theme::news/archive/results.title'))
@section('body', 'news-archive')
@section('navigation', '/archive')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/archive/results.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::news/archive/results.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content {{ $results->count() === 0 ? 'dark' : null }}">
                        @if ($results->count() >= 1)
                            <div class="box">
                                <table class="table-striped">
                                    @foreach ($results as $result)
                                        <tr>
                                            <td style="width: 16px;">
                                                <img src="{{ asset(sprintf('/pandaac/theme-tibia/img/newsicon_%s_small.gif', $result->icon())) }}" alt="{{ ucwords($result->icon()) }}">
                                            </td>
                                            <td class="text-center nowrap" style="width: 5px;">
                                                {{ $result->creation()->format('M d Y') }}<br>
                                                <small>{!! trans(sprintf('theme::/news/archive/results.%s', $result->type())) !!}</small>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ url('/archive', $result->slug()) }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    
                                                    <input type="hidden" name="from_day" value="{{ old('from_day', Carbon\Carbon::now()->subDays(30)->format('j')) }}">
                                                    <input type="hidden" name="from_month" value="{{ old('from_month', Carbon\Carbon::now()->subMonth(1)->format('j')) }}">
                                                    <input type="hidden" name="from_year" value="{{ old('from_year', date('Y')) }}">

                                                    <input type="hidden" name="to_day" value="{{ old('to_day', Carbon\Carbon::now()->format('j')) }}">
                                                    <input type="hidden" name="to_month" value="{{ old('to_month', Carbon\Carbon::now()->format('j')) }}">
                                                    <input type="hidden" name="to_year" value="{{ old('to_year', date('Y')) }}">

                                                    @foreach (old('type', ['ticker', 'article', 'news']) as $type)
                                                        <input type="hidden" name="type[]" value="{{ $type }}">
                                                    @endforeach

                                                    @foreach (old('icon', ['staff', 'community', 'development', 'support', 'technical']) as $icon)
                                                        <input type="hidden" name="icon[]" value="{{ $icon }}">
                                                    @endforeach

                                                    @if ($result->type() === 'ticker')
                                                        <button class="anchor">{{ limit($result->content(), 70) }}</button>
                                                    @else
                                                        <button class="anchor">{{ limit($result->title(), 70) }}</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        @else
                            {!! trans('theme::news/archive/results.empty') !!}
                        @endif
                    </div>
                </div>

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table top">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::news/archive/results.form.search') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped inverse dark">
                                    <tr>
                                        <th class="text-center">{!! trans('theme::news/archive/results.form.period') !!}</th>
                                        <th class="text-center">{!! trans('theme::news/archive/results.form.type') !!}</th>
                                        <th class="text-center">{!! trans('theme::news/archive/results.form.category') !!}</th>
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
                                                        {!! trans('theme::news/archive/results.form.day') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('from_month') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/results.form.month') !!}
                                                    </td>
                                                    <td class="{{ $errors->has('from_year') ? 'error' : null }}">
                                                        {!! trans('theme::news/archive/results.form.year') !!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right {{ $errors->has('date') ? 'error' : null }}">{!! trans('theme::news/archive/results.form.from') !!}</td>
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
                                                            @foreach (range($year, date('Y')) as $year)
                                                                <option {{ $year == old('from_year', date('Y')) }}>{{ $year }}</option>
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
                                                    <td class="text-right {{ $errors->has('date') ? 'error' : null }}">{!! trans('theme::news/archive/results.form.to') !!}</td>
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
                                                            @foreach (range($year, date('Y')) as $year)
                                                                <option {{ $year == old('to_year', date('Y')) }}>{{ $year }}</option>
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
                                                {!! trans('theme::news/archive/results.form.newsticker') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="type[]" value="article" {{ in_array('article', old('type', ['article'])) ? 'checked' : null }}>
                                                {!! trans('theme::news/archive/results.form.featured') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="type[]" value="news" {{ in_array('news', old('type', ['news'])) ? 'checked' : null }}>
                                                {!! trans('theme::news/archive/results.form.news') !!}
                                            </label>
                                        </td>
                                        <td class="valign-middle">
                                            <label>
                                                <input type="checkbox" name="icon[]" value="staff" {{ in_array('staff', old('icon', ['staff'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_staff_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/results.form.staff') }}">
                                                {!! trans('theme::news/archive/results.form.staff') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="community" {{ in_array('community', old('icon', ['community'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_community_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/results.form.community') }}">
                                                {!! trans('theme::news/archive/results.form.community') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="development" {{ in_array('development', old('icon', ['development'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_development_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/results.form.development') }}">
                                                {!! trans('theme::news/archive/results.form.development') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="support" {{ in_array('support', old('icon', ['support'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_support_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/results.form.support') }}">
                                                {!! trans('theme::news/archive/results.form.support') !!}
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" name="icon[]" value="technical" {{ in_array('technical', old('icon', ['technical'])) ? 'checked' : null }}>
                                                <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_technical_small.gif') }}" class="valign-middle" alt="{{ trans('theme::news/archive/results.form.technical') }}">
                                                {!! trans('theme::news/archive/results.form.technical') !!}
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <br>

                    <button class="blue-button">
                        <span>{!! trans('theme::news/archive/results.form.submit') !!}</span>
                    </button>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
