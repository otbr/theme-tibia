@extends('theme::app')

@section('title', trans('theme::account/player/create/form.title'))
@section('body', 'account-player-create-form')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/player/create/form.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                {!! trans('theme::account/player/create/form.preamble', [
                    'server'    => server()->name(),
                    'rules'     => url('/support/rules'),
                ]) !!}
                
                <br>

                @include('theme::errors')
                
                <form method="POST" action="{{ url('/account/character/confirm') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::account/player/create/form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped">
                                    <tr>
                                        <th style="width: 20%;"><strong class="{{ $errors->has('player') ? 'error' : null }}">{!! trans('theme::account/player/create/form.name') !!}</strong></th>
                                        <th><strong class="{{ $errors->has('sex') ? 'error' : null }}">{!! trans('theme::account/player/create/form.sex') !!}</strong></th>
                                    </tr>
                                    <tr>
                                        <td style="width: 50%;">
                                            <input type="text" name="player" size="35" maxlength="30" id="name-suggestion" value="{{ old('player') }}" data-v-model="name"><br>
                                            <small>[<a href="#" id="suggest-name" data-v-on="click: suggestName">{!! trans('theme::account/player/create/form.suggestname') !!}</a>]</small>
                                        </td>
                                        @if (count($genders = genders()) > 1)
                                            <td>
                                                @foreach ($genders as $gender)
                                                    <label>
                                                        <input type="radio" name="sex" value="{{ $gender->id() }}" {{ old('sex', 1) == $gender->id() ? 'checked' : null }}> 
                                                        {{ $gender->name() }}
                                                    </label>
                                                    <br>
                                                @endforeach
                                            </td>
                                        @endif
                                    </tr>
                                </table>
                            </div>

                            @if ($vocations = vocations(true) and $vocations->count() > 1)
                                <?php $first = $vocations->first()->id(); ?>

                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('vocation') ? 'error' : null }}">{!! trans('theme::account/player/create/form.vocation') !!}</strong></p></th>
                                                <td>
                                                    @foreach ($vocations as $vocation)
                                                        <label>
                                                            <input type="radio" name="vocation" value="{{ $vocation->id() }}" {{ old('vocation', $first) == $vocation->id() ? 'checked' : null }}> 
                                                            {{ $vocation->name() }}
                                                        </label>
                                                        &nbsp;
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif

                            @if ($towns = towns(true) and $towns->count() > 1)
                                <?php $first = $towns->first()->id(); ?>

                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('town') ? 'error' : null }}">{!! trans('theme::account/player/create/form.town') !!}</strong></p></th>
                                                <td>
                                                    @foreach ($towns as $town)
                                                        <label>
                                                            <input type="radio" name="town" value="{{ $town->id() }}" {{ old('town', $first) == $town->id() ? 'checked' : null }}> 
                                                            {{ $town->name() }}
                                                        </label>
                                                        &nbsp;
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            
                            @if ($worlds = worlds() and $worlds->count() > 1)
                                <?php $random = $worlds->random()->id(); ?>

                                <div class="box">
                                    <div class="inner-box">
                                        <table class="full-width">
                                            <tr>
                                                <th style="width: 20%;" class="valign-top"><p><strong class="{{ $errors->has('world') ? 'error' : null }}">{!! trans('theme::account/player/create/form.world') !!}</strong></p></th>
                                                <td>
                                                    @foreach ($worlds as $key => $world)
                                                        <p>
                                                            <label>
                                                                <input type="radio" name="world" value="{{ $world->id() }}" {{ old('world', $random) == $world->id() ? 'checked' : null }}> 

                                                                @if ($flag = $world->flag())
                                                                    <img src="{{ cdn('flags', ['flag' => $flag]) }}" alt="{{ strtoupper($flag) }}" title="{{ country($flag) }}" class="flag">
                                                                @endif

                                                                {{ $world->name() }} 
                                                                <small>({{ $world->type() }})</small>
                                                            </label>
                                                        </p>
                                                    @endforeach
                                                    
                                                    <p><small>[<a href="#" id="suggest-world" data-v-on="click: suggestWorld">{!! trans('theme::account/player/create/form.suggestworld') !!}</a>]</small></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <br>

                    <table class="full-width">
                        <tr>
                            <td style="width: 50%;" class="text-center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::account/player/create/form.submit') !!}</span>
                                </button>
                            </td>
                            <td style="width: 50%;" class="text-center">
                                <a href="{{ url('/account') }}" class="blue-button">
                                    <span>{!! trans('theme::account/player/create/form.back') !!}</span>
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
