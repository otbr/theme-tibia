@extends('theme::app')

@section('title', trans('theme::news/archive/results.title'))
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

                                                    @if (! empty(old('type')))
                                                        @foreach (old('type', ['ticker', 'article', 'news']) as $type)
                                                            <input type="hidden" name="type[{{ $type }}]" value="{{ $type }}">
                                                        @endforeach
                                                    @endif

                                                    @if (! empty(old('category')))
                                                        @foreach (old('category', ['staff', 'community', 'development', 'support', 'technical']) as $category)
                                                            <input type="hidden" name="category[{{ $category }}]" value="{{ $category }}">
                                                        @endforeach
                                                    @endif

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

                @include('theme::news.archive.form', ['top' => true])

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
