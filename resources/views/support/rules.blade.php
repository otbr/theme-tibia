@extends('theme::app')

@section('title', server()->name().' Rules')
@section('body', 'support-rules')
@section('navigation', '/support/rules')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{{ server()->name() }} Rules</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <p>All players have to respect the following code of conduct, so-called "{{ server()->name() }} Rules".</p>

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {{ server()->name() }} Rules
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! $document !!}
                    </div>
                </div>

                <br>

                <p>If your account or one of your characters got punished, you will find an entry in your criminal record on your <a href="{{ url('/account') }}">account</a> page. There you can read the reason and the duration of the punishment.</p>

                <p>Have fun in {{ server()->name() }}!</p>
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
