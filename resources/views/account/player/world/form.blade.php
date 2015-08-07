@extends('theme::app')

@title(trans('theme::account/player/world/form.title'))
@navigation('/account')
@bodyclass('account-character-world')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account/player/world/form.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account/player/world/form.preamble') !!}

            <ul>
                <li class="yes">{!! trans('theme::account/player/world/form.transfered') !!}</li>
                <li class="no">{!! trans('theme::account/player/world/form.level') !!}</li>
                <li class="yes">{!! trans('theme::account/player/world/form.guild') !!}</li>
                <li class="yes">{!! trans('theme::account/player/world/form.marriage') !!}</li>
                <li class="no">{!! trans('theme::account/player/world/form.house') !!}</li>
                <li class="no">{!! trans('theme::account/player/world/form.beginner') !!}</li>
            </ul>

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'world']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/player/world/form.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped">
                                <tr>
                                    <th>{!! trans('theme::account/player/world/form.name') !!}</th>
                                    <th>{!! trans('theme::account/player/world/form.current') !!}</th>
                                    <th>{!! trans('theme::account/player/world/form.target') !!}</th>
                                    <th>{!! trans('theme::account/player/world/form.requirement') !!}</th>
                                </tr>
                                <tr>
                                    <td>{{ $player->name() }}</td>
                                    <td>{{ $player->world()->name() }} ({{ $player->world()->type() }})</td>
                                    <td>
                                        <select name="world">
                                            <option>(select your target game world)</option>
                                            @foreach ($worlds as $world)
                                                <option value="{{ $world->id() }}">{{ $world->name() }} ({{ $world->type() }})</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><strong class="green">{!! trans('theme::account/player/world/form.available') !!}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <button class="green-button">
                                <span>{{ trans('theme::account/player/world/form.continue') }}</span>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                <span>{{ trans('theme::account/player/world/form.back') }}</span>
                            </a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@stop
