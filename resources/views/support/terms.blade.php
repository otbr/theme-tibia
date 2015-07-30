@extends('theme::app')

@title('Legal Documents')
@navigation('/support/legal')
@bodyclass('support-terms')

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
                        {{ server()->name() }} Service Agreement
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
@endsection
