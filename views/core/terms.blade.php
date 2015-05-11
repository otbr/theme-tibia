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
			<div class="table">
				<header class="header">
					<div class="borders">
						<span class="edges top"></span>
						Tibia Service Agreement
						<span class="edges bottom"></span>
					</div>
				</header>

				<div class="content dark">
					{!! $document !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
