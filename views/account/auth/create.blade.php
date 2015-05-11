@extends('theme::app')

@section('title', 'Create Account')
@section('body', 'account-create')

@section('content')
<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-createaccount.gif') }}">
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
							Create New Account
							<span class="edges bottom"></span>
						</div>
					</header>

					<div class="content">
						<div class="box">
							<div class="inner-box">
								<table cellspacing="0" cellpadding="0" border="0" width="100%">
									<tr>
										<th width="20%"><strong class="{{ $errors->has('name') ? 'error' : null }}">Account Name:</strong></th>
										<td><input type="password" name="name" size="35" maxlength="30"></td>
									</tr>
									<tr>
										<th><strong class="{{ $errors->has('email') ? 'error' : null }}">Email:</strong></th>
										<td><input type="email" name="email" size="35" maxlength="50" value="{{ old('email') }}"></td>
									</tr>
									<tr>
										<th><strong class="{{ $errors->has('password') ? 'error' : null }}">Password:</strong></th>
										<td><input type="password" name="password" size="35" maxlength="29"></td>
									</tr>
									<tr>
										<th><strong class="{{ $errors->has('password') ? 'error' : null }}">Password Again:</strong></th>
										<td><input type="password" name="password_confirmation" size="35" maxlength="29"></td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="box">
							<div class="inner-box">
								<table cellspacing="0" cellpadding="0" border="0" width="100%">
									<tr>
										<th width="20%"><strong class="{{ $errors->has('character') ? 'error' : null }}">Character Name:</strong></th>
										<td><input type="text" name="character" size="35" maxlength="30" id="name-field" value="{{ old('character') }}"></td>
									</tr>
									<tr>
										<th></th>
										<td><small>[<a href="#" id="suggest-name">suggest name</a>]</small></td>
									</tr>
									@if (count($genders = genders()) > 1)
										<tr>
											<th><strong class="{{ $errors->has('sex') ? 'error' : null }}">Sex:</strong></th>
											<td>
												@foreach ($genders as $key => $gender)
													<label>
														<input type="radio" name="sex" value="{{ $gender->id() }}" {{ $key === 0 ? 'checked' : null }}> 
														{{ $gender->name() }}
													</label>
												@endforeach
											</td>
										</tr>
									@endif
									@if (count($vocations = vocations(true)) > 1)
										<tr>
											<th><strong class="{{ $errors->has('vocation') ? 'error' : null }}">Vocation:</strong></th>
											<td>
												@foreach ($vocations as $key => $vocation)
													<label>
														<input type="radio" name="vocation" value="{{ $vocation->id() }}" {{ $key === $vocations->first()->id() ? 'checked' : null }}> 
														{{ $vocation->name() }}
													</label>
												@endforeach
											</td>
										</tr>
									@endif
								</table>
							</div>
						</div>
						
						@if (count($worlds = worlds()) > 1)
							<div class="box">
								<div class="inner-box">
									<table cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<th width="20%" valign="top"><p><strong class="{{ $errors->has('world') ? 'error' : null }}">World:</strong></p></th>
											<td>
												<?php $random = $worlds->random()->id(); ?>
												@foreach ($worlds as $key => $world)
													<p>
														<label>
															<input type="radio" name="world" value="{{ $world->id() }}" {{ $world->id() === $random ? 'checked' : null }}> 
															{{ $world->name() }} 
															<small>({{ $world->type() }})</small>
														</label>
													</p>
												@endforeach
												
												<p><small>[<a href="#" id="suggest-game">suggest game world</a>]</small></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						@endif
						
						<div class="box">
							<div class="inner-box">
								<p>
									<strong>Please select the following check box:</strong><br>
									<input type="checkbox" name="terms" value="1">
									I agree to the <a href="#">Tibia Service Agreement</a>, the <a href="#">Tibia Rules</a> and the <a href="#">Tibia Privacy Policy</a>.
								</p>
							</div>
						</div>
					</div>
				</div>

				<br>

				<button class="blue-button">
					<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_submit.gif') }}" alt="Submit">
				</button>
			</form>

		</div>
	</div>

	<span class="corners bottom"></span>
</div>
@stop

@section('footer')
	<script src="{{ asset('/pandaac/theme-tibia/js/faker.min.js') }}"></script>
	<script>
		(function(window, document, undefined) {
			var btnSuggestName = document.getElementById('suggest-name'),
				btnSuggestGame = document.getElementById('suggest-game'),
				nameField      = document.getElementById('name-field'),
				gameWorlds     = document.querySelectorAll('[name="world"]'),
				suggestName    = function(e) {
					e.preventDefault();

					nameField.value = faker.name.firstName() + ' ' + faker.name.lastName();

					return false;
				},
				suggestGameWorld = function(e) {
					e.preventDefault();

					var rand = Math.floor(Math.random() * gameWorlds.length);
					if (gameWorlds[rand].checked === true) return suggestGameWorld(e);
					gameWorlds[rand].checked = true;

					return false;
				};

			btnSuggestName.addEventListener('click', suggestName, false);
			btnSuggestGame.addEventListener('click', suggestGameWorld, false);
		})(window, document);
	</script>
@stop
