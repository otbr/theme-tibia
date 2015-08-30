@extends('theme::app')

@section('title', trans('theme::worlds/overview.title'))
@section('body', 'worlds-overview')
@section('navigation', '/worlds')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::worlds/overview.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::worlds/overview.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <div class="inner-box">
                                <table>
                                    <tr>
                                        <th>{!! trans('theme::worlds/overview.record.heading') !!}&nbsp;&nbsp;&nbsp;</th>
                                        <td>
                                            {!! trans('theme::worlds/overview.record.content', [
                                                'record'    => rand(1, 1000),
                                                'date'      => Carbon\Carbon::createFromTimestamp(time())->format('M d Y, H:i:s e'),
                                            ]) !!}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th style="width: 25%;">{!! trans('theme::worlds/overview.world') !!}</th>
                                    <th style="width: 25%;">{!! trans('theme::worlds/overview.players') !!}</th>
                                    <th style="width: 25%;">{!! trans('theme::worlds/overview.location') !!}</th>
                                    <th style="width: 25%;">{!! trans('theme::worlds/overview.type') !!}</th>
                                </tr>

                                @foreach ($worlds as $world)
                                    <tr>
                                        <td><a href="{{ url('/worlds', $world->slug()) }}">{{ $world->name() }}</a></td>
                                        <td>{{ $world->players()->count() }}</td>
                                        <td>
                                            @if ($country = country($flag = $world->flag()))
                                                <img src="{{ config('pandaac.theme-tibia.paths.flags') }}/{{ $flag }}.gif" alt="{{ strtoupper($flag) }}" title="{{ $country }}" class="flag">
                                                {{ $country }}
                                            @else
                                                {!! trans('theme::worlds/overview.notapplicable') !!}
                                            @endif
                                        </td>
                                        <td>{{ $world->type() }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
