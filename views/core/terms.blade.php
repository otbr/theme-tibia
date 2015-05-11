@extends('theme::app')

@section('title', 'Legal Documents')
@section('body', 'legal-terms')

@section('content')
<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-legaldocuments.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">
			{{ $document }}
		</div>
	</div>
</div>
@endsection
