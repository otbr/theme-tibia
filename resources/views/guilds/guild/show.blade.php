@extends('theme::app')

@section('title', trans('theme::guilds/guild/show.title'))
@section('body', 'guilds-show')
@section('navigation', '/guilds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::guilds/guild/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <table class="full-width">
                    <tr>
                        <td class="logo">
                            <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                        </td>
                        <td>
                            <h1>{{ $guild->name() }}</h1>
                        </td>
                        <td class="logo">
                            <img src="{{ asset('/pandaac/theme-tibia/img/default_logo.gif') }}" alt="{{ $guild->name() }}">
                        </td>
                    </tr>
                </table>

                <table class="full-width informations-table">
                    <tr>
                        <td class="valign-top">
                            <div class="table">
                                <header class="header">
                                    <div class="borders">
                                        <span class="edges top"></span>
                                        {!! trans('theme::guilds/guild/show.information.heading') !!}
                                        <span class="edges bottom"></span>
                                    </div>
                                </header>

                                <div class="content dark">
                                    @if ($description = $guild->properties->description())
                                        {{ $description }}
                                        <br>
                                        <br>
                                    @endif

                                    {!! trans_choice('theme::guilds/guild/show.information.founded', worlds()->count(), [
                                        'world' => $world ? $world->name() : null,
                                        'date'  => $guild->properties->createdAt()->format('M d Y'),
                                    ]) !!}
                                    <br>

                                    @if (! $guild->isForming())
                                        {!! trans('theme::guilds/guild/show.information.active') !!}<br>
                                    @else
                                        {!! trans('theme::guilds/guild/show.information.forming') !!}<br>
                                    @endif

                                    @if (rand(0, 1))
                                        {!! trans('theme::guilds/guild/show.information.opened') !!}<br>
                                    @else
                                        {!! trans('theme::guilds/guild/show.information.closed') !!}<br>
                                    @endif

                                    @if ($guild->isForming())
                                        {!! trans('theme::guilds/guild/show.information.disband', [
                                            'date' => (new Carbon\Carbon)->addDays(10)->format('M d Y'),
                                        ]) !!}<br>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="valign-top navigation">
                            <div class="table">
                                <header class="header">
                                    <div class="borders">
                                        <span class="edges top"></span>
                                        {!! trans('theme::guilds/guild/show.navigation.heading') !!}
                                        <span class="edges bottom"></span>
                                    </div>
                                </header>

                                <div class="content dark">
                                    <table class="full-width text-center">
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.wars') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.events') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="blue-button">
                                                    <span>{!! trans('theme::guilds/guild/show.navigation.offence') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::guilds/guild/show.members.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content table-striped">
                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.rank') !!}&nbsp;
                                        <small>[<a href="?sort=rank&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::guilds/guild/show.members.sort') !!}</a>]</small>

                                        @if ($sort === 'rank')
                                            <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                        @endif
                                    </th>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.name') !!}
                                    </th>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.vocation') !!}&nbsp;
                                        <small>[<a href="?sort=vocation&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::guilds/guild/show.members.sort') !!}</a>]</small>

                                        @if ($sort === 'vocation')
                                            <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                        @endif
                                    </th>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.level') !!}&nbsp;
                                        <small>[<a href="?sort=level&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::guilds/guild/show.members.sort') !!}</a>]</small>

                                        @if ($sort === 'level')
                                            <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                        @endif
                                    </th>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.joining') !!}
                                    </th>
                                    <th>
                                        {!! trans('theme::guilds/guild/show.members.status') !!}
                                    </th>
                                </tr>

                                <?php $odd = false; ?>
                                @foreach ($guild->ranks as $rank)
                                    @if ($rank->players->count() >= 1 /*or $rank->level() === 3*/)
                                        <?php $first = false; ?>

                                        @foreach ($rank->players as $player)
                                            <tr class="{{ $odd ? 'odd' : 'even' }}">
                                                <td>
                                                    @if (! $first and $first = true)
                                                        {{ $rank->name() }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('/characters', $player->slug()) }}">{{ $player->name() }}</a>
                                                </td>
                                                <td>
                                                    {{ $player->vocation()->name() }}
                                                </td>
                                                <td>
                                                    {{ $player->level() }}
                                                </td>
                                                <td></td>
                                                <td>
                                                    @if ($player->isOnline())
                                                        <strong class="online">{!! trans('theme::guilds/guild/show.members.online') !!}</strong>
                                                    @else
                                                        <span class="offline">{!! trans('theme::guilds/guild/show.members.offline') !!}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        <?php $odd = ! $odd; ?>
                                    @endif
                                @endforeach
                            </table>
                        </div>

                        <div class="clearfix">
                            <a href="#" class="blue-button pull-right">
                                <span>{!! trans('theme::guilds/guild/show.members.showonline') !!}</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
