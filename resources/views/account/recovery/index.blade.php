@extends('theme::app')

@title(trans('theme::account.recovery.index.title'))
@navigation('/account/recover')
@bodyclass('account-recover')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-lostaccount.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>...</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
