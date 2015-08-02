@extends('theme::app')

@title('News Archieve')
@navigation('/archive')
@bodyclass('news-archive')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">News Archive</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">
        
            <form method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            News Archive Search
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped inverse dark">
                                <tr>
                                    <th class="text-center" style="width: 33.3%;">Time Period</th>
                                    <th class="text-center" style="width: 33.3%;">Type</th>
                                    <th class="text-center" style="width: 33.3%;">Category</th>
                                </tr>
                                <tr>
                                    <td class="valign middle">
                                        <table class="normalise">
                                            <tr>
                                                <td colspan="4" style="height: 10px;"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Day:</td>
                                                <td>Month:</td>
                                                <td>Year:</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">From:</td>
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
                                                <td>Day:</td>
                                                <td>Month:</td>
                                                <td>Year:</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">To:</td>
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
                                            News Ticker
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            Feature Article
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            News
                                        </label>
                                    </td>
                                    <td class="valign middle">
                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_cipsoft_small.gif') }}" class="valign middle" alt="Staff">
                                            Staff
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_community_small.gif') }}" class="valign middle" alt="Community">
                                            Community
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_development_small.gif') }}" class="valign middle" alt="Development">
                                            Development
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_support_small.gif') }}" class="valign middle" alt="Support">
                                            Support
                                        </label>
                                        <br>

                                        <label>
                                            <input type="checkbox" checked>
                                            <img src="{{ asset('/pandaac/theme-tibia/img/newsicon_technical_small.gif') }}" class="valign middle" alt="Technical Issues">
                                            Technical Issues
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <button class="blue-button">
                    <img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="{{ trans('theme::account.create.submit') }}">
                </button>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
