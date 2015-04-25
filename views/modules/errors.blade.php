@if ($errors->has())
	<div class="errors">
		<div class="sign"></div>
		<div class="borders">
			<span class="edges top"></span>
			<h5>The following error has occurred:</h5>
			@foreach ($errors->all() as $error)
				{{ $error }}<br>
			@endforeach
			<span class="edges bottom"></span>
		</div>
	</div>
@endif
