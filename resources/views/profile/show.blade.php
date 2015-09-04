@extends('theme::app')

@section('title', trans('theme::profile/show.title'))
@section('body', 'characters')
@section('navigation', '/characters')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::profile/show.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::profile/show.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th style="width: 25%;">{!! trans('theme::profile/show.name') !!}</th>
                                    <td>
                                        @if ($player->isDeleted())
                                            {!! trans('theme::profile/show.deleted', [
                                                'name' => e($player->name()),
                                                'date' => $player->properties->deletedAt()->format('M d Y, H:i:s e'),
                                            ]) !!}
                                        @else
                                            {{ $player->name() }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::profile/show.sex') !!}</th>
                                    <td>{{ $player->gender()->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::profile/show.vocation') !!}</th>
                                    <td>{{ $player->vocation()->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::profile/show.level') !!}</th>
                                    <td>{{ $player->level() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::profile/show.points') !!}</th>
                                    <td>0</td>
                                </tr>
                                @if (worlds()->count() > 1)
                                    <tr>
                                        <th>{!! trans('theme::profile/show.world') !!}</th>
                                        <td>{{ $player->world()->name() }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>{!! trans('theme::profile/show.residence') !!}</th>
                                    <td>{{ town($player->town())->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::profile/show.lastlogin') !!}</th>
                                    <td>
                                        @if ($player->lastLogin()->getTimestamp() > 0)
                                            {{ $player->lastLogin()->format('M d Y, H:i:s e') }}
                                        @else
                                             {!! trans('theme::profile/show.never') !!}
                                        @endif
                                    </td>
                                </tr>
                                @if ($comment = $player->properties->comment())
                                    <tr>
                                        <th class="valign-top">{!! trans('theme::profile/show.comment') !!}</th>
                                        <td>{!! nl2br(e($comment)) !!}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>{!! trans('theme::profile/show.status') !!}</th>
                                    <td>{!! trans('theme::profile/show.free') !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::profile/show.achievements.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                {!! trans('theme::profile/show.achievements.empty') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::profile/show.account.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th style="width: 25%;">{!! trans('theme::profile/show.account.created') !!}</th>
                                    <td>{{ $player->account->creation()->format('M d Y, H:i:s e') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                @if (! $player->isHidden() and $player->account->players->count())
                    <div class="table top">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::profile/show.players.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped">
                                    <tr>
                                        <th style="width: 20%;">{!! trans('theme::profile/show.players.name') !!}</th>
                                        @if (worlds()->count() > 1)
                                            <th style="width: 10%;">{!! trans('theme::profile/show.players.world') !!}</th>
                                        @endif
                                        <th style="width: 70%;">{!! trans('theme::profile/show.players.status') !!}</th>
                                        <th></th>
                                    </tr>

                                    @foreach ($player->account->players as $key => $character)
                                        <tr>
                                            <td class="valign-middle nowrap">{{ ++$key }}. {{ $character->name() }}&nbsp;</td>
                                            @if (worlds()->count() > 1)
                                                <td class="valign-middle">{{ $character->world()->name() }}</td>
                                            @endif
                                            <td class="valign-middle">
                                                @if ($character->isDeleted())
                                                    {!! trans('theme::profile/show.players.deleted') !!}
                                                @elseif ($character->isOnline())
                                                    <strong class="online">{!! trans('theme::profile/show.players.online') !!}</strong>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('/characters', $character->slug()) }}" class="blue-button">
                                                    <span>{!! trans('theme::profile/show.players.view') !!}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                
                <div class="table top">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::profile/show.form.heading') !!}
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
                                                    <strong>{!! trans('theme::profile/show.form.name') !!}</strong>
                                                </label>
                                            </th>
                                            <td>
                                                <input type="text" name="name" id="name" size="35" maxlength="30" value="{{ old('name') }}">

                                                <button class="blue-button">
                                                    <span>{!! trans('theme::profile/show.form.submit') !!}</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
