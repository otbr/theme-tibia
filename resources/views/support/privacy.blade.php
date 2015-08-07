@extends('theme::app')

@section('title', 'Legal Documents')
@section('body', 'support-privacy')
@section('navigation', '/support/legal')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">Legal Documents</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">
                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {{ server()->name() }} Privacy Policy
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! $document !!}
                    </div>
                </div>
            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
