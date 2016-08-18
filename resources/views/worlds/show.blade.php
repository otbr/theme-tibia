@extends('theme::app')

@section('title', trans('theme::worlds/show.title'))
@section('navigation', '/worlds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::worlds/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                
                @if ($worlds = worlds() and $worlds->count() > 1)
                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::worlds/show.worlds.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content dark">
                            <form method="POST" action="{{ url('/worlds') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <table class="full-width">
                                    <tr>
                                        <th style="width: 22%;">{!! trans('theme::worlds/show.worlds.name') !!}</th>
                                        <td>
                                            <select name="world" style="min-width: 170px;">
                                                @foreach ($worlds as $option)
                                                    <option value="{{ $option->slug() }}" {{ $option->id() === $world->id() ? 'selected' : null }}>{{ $option->name() }}</option>
                                                @endforeach
                                            </select>

                                            <button class="blue-button">
                                                <span>{!! trans('theme::worlds/show.worlds.submit') !!}</span>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                @endif

                <div class="table {{ $worlds->count() > 1 ? 'top' : null }}">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::worlds/show.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        <table class="full-width">
                            <tr>
                                <th style="width: 25%;">{!! trans('theme::worlds/show.status') !!}</th>
                                <td class="world-image">
                                    @if ($world->isOnline())
                                        {!! trans('theme::worlds/show.online') !!}
                                    @else
                                        {!! trans('theme::worlds/show.offline') !!}
                                    @endif

                                    @if ($world->typeId() === 2)
                                        <img src="{{ asset('/pandaac/theme-tibia/img/option_server_pvp_type_hardcore.gif') }}" alt="{{ $world->type() }}">
                                    @elseif ($world->typeId() === 0)
                                        <img src="{{ asset('/pandaac/theme-tibia/img/option_server_pvp_type_optional.gif') }}" alt="{{ $world->type() }}">
                                    @else
                                        <img src="{{ asset('/pandaac/theme-tibia/img/option_server_pvp_type_open.gif') }}" alt="{{ $world->type() }}">
                                    @endif
                                </td>
                            </tr>
                            @if ($world->isOnline())
                                <tr>
                                    <th>{!! trans('theme::worlds/show.playersonline') !!}</th>
                                    <td>{{ $world->players()->count() }}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>{!! trans('theme::worlds/show.onlinerecord') !!}</th>
                                <td>
                                    {!! trans('theme::worlds/show.record', [
                                        'amount' => rand(1000, 1200),
                                        'date'   => Carbon\Carbon::now()->format('F j Y, H:i:s T'),
                                    ]) !!}
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::worlds/show.creation') !!}</th>
                                <td>{{ Carbon\Carbon::now()->format('m/y') }}</td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::worlds/show.location') !!}</th>
                                <td>
                                    @if ($country = country($flag = $world->flag()))
                                        <img src="{{ cdn('flags', ['flag' => $flag]) }}" alt="{{ strtoupper($flag) }}" title="{{ $country }}" class="flag">
                                        {{ $country }}
                                    @else
                                        {!! trans('theme::worlds/overview.notapplicable') !!}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>{!! trans('theme::worlds/show.type') !!}</th>
                                <td>{{ $world->type() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                @if ($world->isOnline())
                    <div class="table top">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::worlds/show.players.heading') !!}

                                <small class="alphabet">
                                    [
                                    @foreach (range('A', 'Z') as $letter)
                                        <a href="#{{ $letter }}">{{ $letter }}</a>
                                    @endforeach
                                    ]
                                </small>
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content table-striped">
                            <div class="box">
                                <table class="table-striped">
                                    <tr>
                                        <th style="width: 90%;">
                                            {!! trans('theme::worlds/show.players.name') !!}&nbsp;
                                            <small>[<a href="?sort=name&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::worlds/show.players.sort') !!}</a>]</small>

                                            @if ($sort === 'name')
                                                <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                            @endif
                                        </th>
                                        <th class="nowrap">
                                            {!! trans('theme::worlds/show.players.level') !!}&nbsp;
                                            <small>[<a href="?sort=level&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::worlds/show.players.sort') !!}</a>]</small>

                                            @if ($sort === 'level')
                                                <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                            @endif
                                        </th>
                                        <th class="nowrap">
                                            {!! trans('theme::worlds/show.players.vocation') !!}&nbsp;
                                            <small>[<a href="?sort=vocation&amp;order={{ $order === 'ASC' ? 'desc' : 'asc' }}">{!! trans('theme::worlds/show.players.sort') !!}</a>]</small>

                                            @if ($sort === 'vocation')
                                                <span class="caret {{ $order === 'DESC' ? 'up' : null }}"></span>
                                            @endif
                                        </th>
                                    </tr>

                                    @forelse ($groups as $group => $players)
                                        @foreach ($players as $index => $player)
                                            <tr id="{{ $index === 0 ? $group : null }}">
                                                <td><a href="{{ url('characters', $player->slug()) }}">{{ $player->name() }}</a></td>
                                                <td class="text-right">{{ $player->level() }}</td>
                                                <td class="text-right">{{ $player->vocation()->name() }}</td>
                                            </tr>
                                        @endforeach
                                    @empty
                                        <tr>
                                            <td colspan="3">{!! trans('theme::worlds/show.players.empty') !!}</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table top">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::worlds/show.form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <div class="inner-box">
                                    <form method="POST" action="{{ url('/characters') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <table>
                                            <tr>
                                                <th>
                                                    <label for="name">
                                                        <strong>{!! trans('theme::worlds/show.form.name') !!}</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                    <input type="text" name="name" id="name" size="35" maxlength="30" value="{{ old('name') }}">

                                                    <button class="blue-button">
                                                        <span>{!! trans('theme::worlds/show.form.submit') !!}</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($worlds->count() > 1)
                    <br>

                    <table class="full-width text-center">
                        <tr>
                            <td>
                                <a href="{{ url('/worlds') }}" class="blue-button">
                                    <span>Back</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                @endif

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
