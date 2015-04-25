@extends('theme::app')

@section('body', 'account-index')

@section('content')
<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">

			@include('theme::modules.errors')
			
			<form method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="table">
					<header class="header">
						<div class="borders">
							<span class="edges top"></span>
							Account Status
							<span class="edges bottom"></span>
						</div>
					</header>

					<div class="content">

					</div>
				</div>
			</form>

		</div>
	</div>

	<span class="corners bottom"></span>
</div>
@stop
