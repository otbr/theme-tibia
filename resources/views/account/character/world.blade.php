@extends('theme::app')

@title(trans('theme::account.character.world.title'))
@navigation('/account')
@bodyclass('account-character-world')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.character.world.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            @include('theme::modules.errors')

            {!! trans('theme::account.character.world.preamble') !!}

            <ul>
                <li class="yes">{!! trans('theme::account.character.world.transfered') !!}</li>
                <li class="no">{!! trans('theme::account.character.world.level') !!}</li>
                <li class="yes">{!! trans('theme::account.character.world.guild') !!}</li>
                <li class="yes">{!! trans('theme::account.character.world.marriage') !!}</li>
                <li class="no">{!! trans('theme::account.character.world.house') !!}</li>
                <li class="no">{!! trans('theme::account.character.world.beginner') !!}</li>
            </ul>

            <form method="POST" action="{{ url('/account/character', [$player->id(), 'world']) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account.character.world.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th>{!! trans('theme::account.character.world.name') !!}</th>
                                    <th>{!! trans('theme::account.character.world.current') !!}</th>
                                    <th>{!! trans('theme::account.character.world.target') !!}</th>
                                    <th>{!! trans('theme::account.character.world.requirement') !!}</th>
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
                                    <td><strong class="green">{!! trans('theme::account.character.world.available') !!}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td align="center">
                            <button class="green-button">
                                <span>{{ trans('theme::account.character.world.continue') }}</span>
                            </button>
                        </td>
                        <td align="center">
                            <a href="{{ url('/account/character', [$player->id()]) }}" class="blue-button">
                                <span>{{ trans('theme::account.character.world.back') }}</span>
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
