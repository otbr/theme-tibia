@extends('theme::app')

@section('title', trans('theme::highscore/show.title'))
@section('navigation', '/highscore')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::highscore/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <br>
                <h2 class="iconless">
                    {!! trans_choice('theme::highscore/show.world', ! ($worlds = worlds() and $worlds->count() > 1), [
                        'skill' => trans(sprintf('theme::highscore/show.skills.%s', $sort)),
                        'world' => $world ? $world->name() : null,
                    ]) !!}
                </h2>

                <div class="clearfix">
                    <div class="pull-left" style="width: 78%;">

                        @if ($worlds->count() > 1)
                            <br>

                            <div class="table">
                                <header class="header">
                                    <div class="borders">
                                        <span class="edges top"></span>
                                        {!! trans('theme::highscore/show.worlds.heading') !!}
                                        <span class="edges bottom"></span>
                                    </div>
                                </header>

                                <div class="content dark">
                                    <form method="POST" action="{{ url('/highscore') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        @if ($sort !== 'experience')
                                            <input type="hidden" name="sort" value="{{ $sort }}">
                                        @endif

                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 1%;">{!! trans('theme::highscore/show.worlds.world') !!}</th>
                                                <td>
                                                    <select name="world">
                                                        @foreach ($worlds as $option)
                                                            <option value="{{ $option->slug() }}" {{ $option->id() === $world->id() ? 'selected' : null }}>{{ $option->name() }}</option>
                                                        @endforeach
                                                    </select>

                                                    &nbsp;

                                                    <button class="blue-button">
                                                        <span>{!! trans('theme::highscore/show.worlds.submit') !!}</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <br>
                        @endif

                        @if ($players->hasPages())
                            <div class="pagination">
                                @if ($players->currentPage() > 1)
                                    <a href="{{ $players->url(1) }}">Top</a> &#124;
                                @endif

                                @if ($previous = $players->previousPageUrl())
                                    <a href="{{ $previous }}">{!! trans('theme::highscore/show.players.page', [
                                        'from'  => $from = $players->firstItem() - $players->perPage(),
                                        'to'    => $from + ($players->perPage() - 1),
                                    ]) !!}</a>
                                @endif

                                @if ($players->hasMorePages())
                                    @if ($players->currentPage() > 1)
                                        &#124;
                                    @endif

                                    <a href="{{ $players->nextPageUrl() }}">{!! trans('theme::highscore/show.players.page', [
                                        'from'  => $from = $players->lastItem() + 1,
                                        'to'    => $from + ($players->perPage() - 1),
                                    ]) !!}</a>
                                @endif
                            </div>
                        @endif

                        <div class="table">
                            <header class="header">
                                <div class="borders">
                                    <span class="edges top"></span>
                                    {!! trans('theme::highscore/show.players.heading') !!}
                                    <span class="edges bottom"></span>
                                </div>
                            </header>

                            <div class="content table-striped">
                                <div class="box">
                                    <table class="table-striped">
                                        <tr>
                                            <th class="nowrap">{!! trans('theme::highscore/show.players.rank') !!}</th>
                                            <th style="width: 90%;">{!! trans('theme::highscore/show.players.name') !!}</th>
                                            <th class="nowrap">{!! trans('theme::highscore/show.players.level') !!}</th>
                                            @if ($sort === 'experience')
                                                <th class="nowrap">{!! trans('theme::highscore/show.players.points') !!}</th>
                                            @endif
                                        </tr>

                                        <?php $index = $players->perPage() * ($players->currentPage() - 1); ?>
                                        @forelse ($players as $player)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td><a href="{{ url('characters', $player->slug()) }}">{{ $player->name() }}</a></td>
                                                <td>
                                                    @if ($sort === 'magic')
                                                        {{ $player->magicLevel() }}
                                                    @elseif ($sort === 'shielding')
                                                        {{ $player->shielding() }}
                                                    @elseif ($sort === 'dist')
                                                        {{ $player->distance() }}
                                                    @elseif ($sort === 'sword')
                                                        {{ $player->sword() }}
                                                    @elseif ($sort === 'club')
                                                        {{ $player->club() }}
                                                    @elseif ($sort === 'axe')
                                                        {{ $player->axe() }}
                                                    @elseif ($sort === 'fist')
                                                        {{ $player->fist() }}
                                                    @elseif ($sort === 'fishing')
                                                        {{ $player->fishing() }}
                                                    @else
                                                        {{ $player->level() }}
                                                    @endif
                                                </td>
                                                @if ($sort === 'experience')
                                                    <td>{{ $player->experience() }}</td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ $sort === 'experience' ? 4 : 3 }}">{!! trans('theme::highscore/show.players.empty') !!}</td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </div>
                            </div>
                        </div>

                        @if ($players->hasPages())
                            <div class="pagination">
                                @if ($players->currentPage() > 1)
                                    <a href="{{ $players->url(1) }}">Top</a> &#124;
                                @endif

                                @if ($previous = $players->previousPageUrl())
                                    <a href="{{ $previous }}">{!! trans('theme::highscore/show.players.page', [
                                        'from'  => $from = $players->firstItem() - $players->perPage(),
                                        'to'    => $from + ($players->perPage() - 1),
                                    ]) !!}</a>
                                @endif

                                @if ($players->hasMorePages())
                                    @if ($players->currentPage() > 1)
                                        &#124;
                                    @endif
                                    
                                    <a href="{{ $players->nextPageUrl() }}">{!! trans('theme::highscore/show.players.page', [
                                        'from'  => $from = $players->lastItem() + 1,
                                        'to'    => $from + ($players->perPage() - 1),
                                    ]) !!}</a>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="pull-right" style="width: 21%;">
                        @if ($worlds->count() > 1)
                            <br>
                        @else
                            <div class="pagination"></div>
                        @endif

                        <div class="table">
                            <header class="header">
                                <div class="borders">
                                    <span class="edges top"></span>
                                    {!! trans('theme::highscore/show.category.heading') !!}
                                    <span class="edges bottom"></span>
                                </div>
                            </header>

                            <div class="content dark">
                                <a href="{{ url('/highscore', $world ? $world->slug() : null) }}">{!! trans('theme::highscore/show.skills.experience') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'magic'] : 'magic') }}">{!! trans('theme::highscore/show.skills.magic') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'shielding'] : 'shielding') }}">{!! trans('theme::highscore/show.skills.shielding') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'dist'] : 'dist') }}">{!! trans('theme::highscore/show.skills.dist') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'sword'] : 'sword') }}">{!! trans('theme::highscore/show.skills.sword') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'club'] : 'club') }}">{!! trans('theme::highscore/show.skills.club') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'axe'] : 'axe') }}">{!! trans('theme::highscore/show.skills.axe') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'fist'] : 'fist') }}">{!! trans('theme::highscore/show.skills.fist') !!}</a><br>
                                <a href="{{ url('/highscore', $world ? [$world->slug(), 'fishing'] : 'fishing') }}">{!! trans('theme::highscore/show.skills.fishing') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
