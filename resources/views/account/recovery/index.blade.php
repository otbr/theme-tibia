@extends('theme::app')

@section('title', trans('theme::account/recovery/index.title'))
@section('body', 'account-recovery-index')
@section('navigation', '/account/recover')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/recovery/index.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <p>...</p>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>

@stop
