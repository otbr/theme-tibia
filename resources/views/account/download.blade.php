@extends('theme::app')

@title(trans('theme::account.download.title'))
@navigation('/account/download')
@bodyclass('account-download')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">{!! trans('theme::account.download.title') !!}</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>...</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
