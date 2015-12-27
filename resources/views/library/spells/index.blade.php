@extends('theme::app')

@section('title', trans('theme::library/spells.title'))
@section('body', 'library-spells')
@section('navigation', '/library/spells')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::library/spells.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                {!! trans('theme::library/spells.preamble') !!}

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::library/spells.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content">
                        <div class="box">
                            <table class="table-striped" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <th class="header" style="width: 45%;">{!! trans('theme::library/spells.name') !!}</th>
                                    <th class="header">{!! trans('theme::library/spells.group') !!}</th>
                                    <th class="header">{!! trans('theme::library/spells.type') !!}</th>
                                    <th class="header">{!! trans('theme::library/spells.level') !!}</th>
                                    <th class="header">{!! trans('theme::library/spells.mana') !!}</th>
                                    <th class="header">{!! trans('theme::library/spells.premium') !!}</th>
                                </tr>

                                @forelse ($spells as $spell)
                                    <tr>
                                        <td>
                                            <a href="#">{{ $spell->name() }}</a> 
                                            ({{ $spell->words() }})
                                        </td>
                                        <td>{{ $spell->group() }}</td>
                                        <td>{{ $spell->type() }}</td>
                                        <td>{{ $spell->level() }}</td>
                                        <td>{{ $spell->mana() }}</td>
                                        <td>
                                            @if ($spell->premium())
                                                {!! trans('theme::library/spells.yes') !!}
                                            @else
                                                {!! trans('theme::library/spells.no') !!}
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">{!! trans('theme::library/spells.empty') !!}</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>

                <br>

                <form method="POST" action="{{ url('/library/spells') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="table">
                        <header class="header">
                            <div class="borders">
                                <span class="edges top"></span>
                                {!! trans('theme::library/spells.form.heading') !!}
                                <span class="edges bottom"></span>
                            </div>
                        </header>

                        <div class="content">
                            <div class="box">
                                <table class="table-striped inverse dark" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <th class="header" style="width: 25%;">{!! trans('theme::library/spells.form.vocation') !!}</th>
                                        <th class="header" style="width: 25%;">{!! trans('theme::library/spells.form.group') !!}</th>
                                        <th class="header" style="width: 25%;">{!! trans('theme::library/spells.form.type') !!}</th>
                                        <th class="header" style="width: 25%;">{!! trans('theme::library/spells.form.premium') !!}</th>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <label>
                                                <input type="radio" name="vocation" value="all" {{ in_array(old('vocation'), ['', 'all']) ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.all') !!}
                                            </label>
                                            <br>

                                            @foreach (vocations(true) as $vocation)
                                                <label>
                                                    <input type="radio" name="vocation" value="{{ $vocation->id() }}" {{ old('vocation') == $vocation->id() ? 'checked' : null }}> 
                                                    {{ $vocation->name() }}
                                                </label>
                                                <br>
                                            @endforeach
                                        </td>
                                        <td valign="top">
                                            <label>
                                                <input type="radio" name="group" value="all" {{ in_array(old('group'), ['', 'all']) ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.all') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="group" value="attack" {{ old('group') == 'attack' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.attack') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="group" value="healing" {{ old('group') == 'healing' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.healing') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="group" value="support" {{ old('group') == 'support' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.support') !!}
                                            </label>
                                        </td>
                                        <td valign="top">
                                            <label>
                                                <input type="radio" name="type" value="all" {{ in_array(old('type'), ['', 'all']) ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.all') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="type" value="instant" {{ old('type') == 'instant' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.instant') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="type" value="conjure" {{ old('type') == 'conjure' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.conjure') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="type" value="rune" {{ old('type') == 'rune' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.rune') !!}
                                            </label>
                                        </td>
                                        <td valign="top">
                                            <label>
                                                <input type="radio" name="premium" value="all" {{ in_array(old('premium'), ['', 'all']) ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.all') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="premium" value="no" {{ old('premium') == 'no' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.no') !!}
                                            </label>
                                            <br>
                                            <label>
                                                <input type="radio" name="premium" value="yes" {{ old('premium') == 'yes' ? 'checked' : null }}> 
                                                {!! trans('theme::library/spells.form.yes') !!}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            {!! trans('theme::library/spells.form.sortby') !!} 
                                            <select name="sort">
                                                <option value="name" {{ old('sort') == 'name' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.name') !!}
                                                </option>
                                                <option value="group" {{ old('sort') == 'group' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.group') !!}
                                                </option>
                                                <option value="type" {{ old('sort') == 'type' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.type') !!}
                                                </option>
                                                <option value="level" {{ old('sort') == 'level' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.level') !!}
                                                </option>
                                                <option value="mana" {{ old('sort') == 'mana' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.mana') !!}
                                                </option>
                                                <option value="premium" {{ old('sort') == 'premium' ? 'selected' : null }}>
                                                    {!! trans('theme::library/spells.form.sort.premium') !!}
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <br>

                    <table style="width: 100%;">
                        <tr>
                            <td align="center">
                                <button class="blue-button">
                                    <span>{!! trans('theme::library/spells.form.submit') !!}</span>
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
