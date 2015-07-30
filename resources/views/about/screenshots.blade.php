@extends('theme::app')

@title('Screenshots')
@navigation('/about/screenshots')
@bodyclass('about-screenshots')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <div class="headline">Screenshots</div>
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p class="text-center">Click on an image to enlarge the screenshot!</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
