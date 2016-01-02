@extends('theme::app')

@section('title', $spell->name())
@section('body', 'library-spells-single')
@section('navigation', '/library/spells')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::library/spells.show.headline') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <table class="full-width">
                    <tr>
                        <td>
                            <img src="{{ config('pandaac.theme-tibia.paths.spells') }}/{{ $spell->slug() }}.gif" alt="{{ $spell->name() }}" class="tibia-sprite">
                        </td>
                        <td>
                            <h2 class="iconless">{{ $spell->name() }}</h2>
                        </td>
                        <td class="text-right">
                            <img src="{{ config('pandaac.theme-tibia.paths.spells') }}/{{ $spell->slug() }}.gif" alt="{{ $spell->name() }}" class="tibia-sprite">
                        </td>
                    </tr>
                </table>

                <br>

                @if ($description = $spell->description())
                    <p>{{ $description }}</p>
                @else
                    <p><em>{!! trans('theme::library/spells.show.empty') !!}</em></p>
                @endif

                <br>

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::library/spells.show.info.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th style="width: 20%;">{!! trans('theme::library/spells.show.info.name') !!}</th>
                                    <td>{{ $spell->name() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.formula') !!}</th>
                                    <td>{{ $spell->words() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.vocation') !!}</th>
                                    <td>{{ implode(', ', $spell->vocations()) }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.group') !!}</th>
                                    <td>{{ $spell->group() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.type') !!}</th>
                                    <td>{{ $spell->type() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.level') !!}</th>
                                    <td>{{ $spell->level() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.mana') !!}</th>
                                    <td>{{ $spell->mana() }}</td>
                                </tr>
                                <tr>
                                    <th>{!! trans('theme::library/spells.show.info.premium') !!}</th>
                                    <td>
                                        @if ($spell->premium())
                                            {!! trans('theme::library/spells.show.info.yes') !!}
                                        @else
                                            {!! trans('theme::library/spells.show.info.no') !!}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            @if (old('vocation'))
                                <form method="POST" action="{{ url('/library/spells') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                    <input type="hidden" name="vocation" value="{{ old('vocation') }}">
                                    <input type="hidden" name="group" value="{{ old('group') }}">
                                    <input type="hidden" name="type" value="{{ old('type') }}">
                                    <input type="hidden" name="premium" value="{{ old('premium') }}">
                                    <input type="hidden" name="sort" value="{{ old('sort') }}">

                                    <button class="blue-button">
                                        <span>{!! trans('theme::news/archive/show.back') !!}</span>
                                    </button>
                                </form>
                            @else
                                <a href="{{ url('/library/spells') }}" class="blue-button">
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
