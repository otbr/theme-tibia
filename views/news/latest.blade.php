@extends('theme::app')

@section('content')
<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-newsticker.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">
			Lorem ipsum.
		</div>
	</div>

	<span class="corners bottom"></span>
</div>

<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-featuredarticle.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">
			Lorem ipsum.
		</div>
	</div>

	<span class="corners bottom"></span>
</div>

<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-news.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">
			Lorem ipsum.
		</div>
	</div>

	<span class="corners bottom"></span>
</div>
@stop
