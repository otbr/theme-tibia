@extends('theme::app')

@section('title', trans('theme::news/archive/show.title'))
@section('body', 'news-archive-show')
@section('navigation', '/archive')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/archive/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <article class="article">
                    <header class="header">
                        <span class="icon {{ $article->icon() }}"></span>
                        <time datetime="{{ $article->creation()->format('Y-m-d H:i:s e') }}">{{ $article->creation()->format('M d Y') }}</time>

                        <h2>
                            @if ($article->type() === 'ticker')
                                {!! trans('theme::news/archive/show.ticker') !!}
                            @else
                                {{ $article->title() }}
                            @endif
                        </h2>
                    </header>

                    <div class="body">
                        {!! $article->content() !!}

                        @if ($article->type() !== 'ticker')
                            <br>

                            <p class="text-right">
                                <a href="#">{!! trans('theme::news/archive/show.comment') !!}</a>
                            </p>
                        @else
                            <br><br>
                        @endif
                    </div>
                </article>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/archive') }}" class="blue-button">
                                <span>{!! trans('theme::news/archive/show.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
