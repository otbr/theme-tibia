@extends('theme::app')

@title(trans('theme::news.archive.title'))
@navigation('/archive')
@bodyclass('news-archive')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::news.archive.heading') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::news.archive.search') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped inverse dark">
                                <tr>
                                    <th class="text-center">{!! trans('theme::news.archive.period') !!}</th>
                                    <th class="text-center">{!! trans('theme::news.archive.type') !!}</th>
                                    <th class="text-center">{!! trans('theme::news.archive.category') !!}</th>
                                </tr>
                                <tr>
                                    <td class="valign middle">
                                        <table class="normalise">
                                            <tr>
                                                <td colspan="4" style="height: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>{!! trans('theme::news.archive.day') !!}</td>
                                                <td>{!! trans('theme::news.archive.month') !!}</td>
                                                <td>{!! trans('theme::news.archive.year') !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">{!! trans('theme::news.archive.from') !!}</td>
                                                <td>
                                                    <select>
                                                        @foreach (range(1, 31) as $day)
                                                            <option>{{ $day }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select>
                                                        @foreach (range(1, 12) as $month)
                                                            <option>{{ $month }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select>
                                                        <option>{{ date('Y') }}</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" style="height: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>{!! trans('theme::news.archive.day') !!}</td>
                                                <td>{!! trans('theme::news.archive.month') !!}</td>
                                                <td>{!! trans('theme::news.archive.year') !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">{!! trans('theme::news.archive.to') !!}</td>
                                                <td>
                                                    <select>
                                                        @foreach (range(1, 31) as $day)
                                                            <option>{{ $day }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select>
                                                        @foreach (range(1, 12) as $month)
                                                            <option>{{ $month }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select>
                                                        <option>{{ date('Y') }}</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" style="height: 10px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="valign middle">
                                        <label>
                                            <input type="checkbox" checked>
                                            {!! trans('theme::news.archive.newsticker') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            {!! trans('theme::news.archive.featured') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            {!! trans('theme::news.archive.news') !!}
                                        </label>
                                    </td>
                                    <td class="valign middle">
                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_cipsoft_small.gif') }}" class="valign middle" alt="{!! trans('theme::news.archive.staff') !!}">
                                            {!! trans('theme::news.archive.staff') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_community_small.gif') }}" class="valign middle" alt="{!! trans('theme::news.archive.community') !!}">
                                            {!! trans('theme::news.archive.community') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_development_small.gif') }}" class="valign middle" alt="{!! trans('theme::news.archive.development') !!}">
                                            {!! trans('theme::news.archive.development') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_support_small.gif') }}" class="valign middle" alt="{!! trans('theme::news.archive.support') !!}">
                                            {!! trans('theme::news.archive.support') !!}
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_technical_small.gif') }}" class="valign middle" alt="{!! trans('theme::news.archive.technical') !!}">
                                            {!! trans('theme::news.archive.technical') !!}
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <button class="blue-button">
                    <span>{{ trans('theme::account.create.submit') }}</span>
                </button>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
