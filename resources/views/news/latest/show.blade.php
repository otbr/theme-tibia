@extends('theme::app')

@section('title', trans('theme::news/latest/show.title'))
@section('navigation', '/')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::news/latest/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <article class="article">
                    <header class="header">
                        <span class="icon {{ $article->icon() }}"></span>
                        <time datetime="{{ $article->creation()->format('Y-m-d H:i:s e') }}">{{ $article->creation()->format('M d Y') }}</time>

                        <h2>
                            @if ($article->type() === 'ticker')
                                {!! trans('theme::news/latest/show.ticker') !!}
                            @else
                                {{ $article->title() }}
                            @endif
                        </h2>
                    </header>

                    <div class="body">
                        {!! $article->content() !!}

                        <br>

                        @if ($article->type() !== 'ticker')
                            <p class="text-right">
                                <a href="#">{!! trans('theme::news/latest/show.comment') !!}</a>
                            </p>
                        @endif
                    </div>
                </article>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/') }}" class="blue-button">
                                <span>{!! trans('theme::news/latest/show.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
