@extends('theme::app')

@section('title', trans('theme::news/latest.title'))
@section('body', 'news-latest')
@section('navigation', '/')

@section('content')

    @if ($tickers->count() > 1)
        <div class="box ticker">
            <span class="corners top"></span>

            <header class="header">
                <div class="headline">{!! trans('theme::news/latest.newsticker.heading') !!}</div>
            </header>

            <div class="inner-box-border">
                <div class="inner-box fluid">
                    <table class="table-striped">

                        @foreach ($tickers as $ticker)
                            <tr data-v-on="click: toggle('ticker-{{ $ticker->id() }}')">
                                <td class="valign-top icon-wrapper">
                                    <span class="icon {{ $ticker->icon() }}"></span>
                                </td>
                                <td class="valign-top time-wrapper">
                                    <time datetime="{{ $ticker->creation()->format('Y-m-d H:i:s e') }}">{{ $ticker->creation()->format('M j Y') }}</time>
                                </td>
                                <td class="valign-top content-wrapper">
                                    <span data-v-show="isToggled('ticker-{{ $ticker->id() }}')">{{ $ticker->content() }}</span>
                                    <span data-v-show="! isToggled('ticker-{{ $ticker->id() }}')">{{ $ticker->excerpt() }}</span>
                                </td>
                                <td class="valign-top">
                                    <button class="plusminus active" data-v-class="active: isToggled('ticker-{{ $ticker->id() }}')"></button>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>

            <span class="corners bottom"></span>
        </div>
    @endif

    @if ($article->count() === 1)
        <div class="box featured">
            <span class="corners top"></span>

            <header class="header">
                <div class="headline">{!! trans('theme::news/latest.featured.heading') !!}</div>
            </header>

            <div class="inner-box-border">
                <div class="inner-box fluid">
                    <table class="full-width">
                        <tr>
                            <td class="valign-top">
                                <p>
                                    <strong>{{ $article->title() }}</strong>
                                    {{ $article->excerpt() }}
                                </p>
                            </td>
                            @if ($image = $article->image())
                                <td style="width: 1%;" class="valign-top text-right" rowspan="2">
                                    <a href="#" class="featured-image">
                                        <img src="{{ $image }}" alt="{{ $article->title() }}">
                                    </a>
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td class="text-right valign-bottom">
                                <a href="#" class="readmore">{!! trans('theme::news/latest.featured.readmore') !!}</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <span class="corners bottom"></span>
        </div>
    @endif

    <div class="box news">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/latest.news.heading') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box fluid">

                @forelse ($news as $newsitem)
                    <article class="article">
                        <header class="header">
                            <span class="icon {{ $newsitem->icon() }}"></span>
                            <time datetime="{{ $newsitem->creation()->format('Y-m-d H:i:s e') }}">{{ $newsitem->creation()->format('M d Y') }}</time>

                            <h2>{{ $newsitem->title() }}</h2>
                        </header>

                        <div class="body">
                            {!! $newsitem->content() !!}

                            <p class="text-right">
                                <a href="#">{!! trans('theme::news/latest.news.comment') !!}</a>
                            </p>
                        </div>
                    </article>
                @empty
                     {!! trans('theme::news/latest.news.empty') !!}
                @endforelse

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
