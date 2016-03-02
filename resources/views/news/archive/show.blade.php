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
                            @if (app('request')->isMethod('post') and old('from_day'))
                                <form method="POST" action="{{ url('/archive') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                    <input type="hidden" name="from_day" value="{{ old('from_day') }}">
                                    <input type="hidden" name="from_month" value="{{ old('from_month') }}">
                                    <input type="hidden" name="from_year" value="{{ old('from_year') }}">

                                    <input type="hidden" name="to_day" value="{{ old('to_day') }}">
                                    <input type="hidden" name="to_month" value="{{ old('to_month') }}">
                                    <input type="hidden" name="to_year" value="{{ old('to_year') }}">

                                    @if (! empty(old('type')))
                                        @foreach (old('type') as $type)
                                            <input type="hidden" name="type[{{ $type }}]" value="{{ $type }}">
                                        @endforeach
                                    @endif

                                    @if (! empty(old('type')))
                                        @foreach (old('category') as $category)
                                            <input type="hidden" name="category[{{ $category }}]" value="{{ $category }}">
                                        @endforeach
                                    @endif

                                    <button class="blue-button">
                                        <span>{!! trans('theme::news/archive/show.back') !!}</span>
                                    </button>
                                </form>
                            @else
                                <a href="{{ url('/archive') }}" class="blue-button">
                                    <span>{!! trans('theme::news/archive/show.back') !!}</span>
                                </a>
                            @endif
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
