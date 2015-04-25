@extends('theme::app')

@section('body', 'account-login')

@section('content')
<div class="box">
	<span class="corners top"></span>

	<header class="header">
		<img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-accountmanagement.gif') }}">
	</header>

	<div class="inner-box-border">
		<div class="inner-box">

			@include('theme::modules.errors')
			
			<div class="table">
				<header class="header">
					<div class="borders">
						<span class="edges top"></span>
						Account Login
						<span class="edges bottom"></span>
					</div>
				</header>

				<div class="content">
					<div class="box">
						<div class="inner-box">
							<form method="POST">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="buttons-right">
									<button class="blue-button">
										<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_login.gif') }}" alt="Login">
									</button>
									<a href="#" class="blue-button">
										<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_accountlost.gif') }}" alt="Account Lost?">
									</a>
								</div>

								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<th><strong class="{{ $errors->has() ? 'error' : null }}">Account Name:</strong></th>
										<td><input type="password" name="name" size="35" maxlength="30"></td>
									</tr>
									<tr>
										<th><strong class="{{ $errors->has() ? 'error' : null }}">Password:</strong></th>
										<td><input type="password" name="password" size="35" maxlength="29"></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>

			<br>

			<h1>New to Tibia?</h1>
			
			<div class="table">
				<header class="header">
					<div class="borders">
						<span class="edges top"></span>
						New Player
						<span class="edges bottom"></span>
					</div>
				</header>

				<div class="content">
					<div class="box">
						<div class="inner-box">
							<div class="information">
								<div class="buttons-right">
									<a href="{{ url('/account/create') }}" class="medium-button">
										<img src="{{ asset('/pandaac/theme-tibia/img/mediumbutton_createaccount.png') }}" alt="Create Account">
									</a>
								</div>

								<strong>Tibia...</strong>
								<p class="indent">... where hardcore gaming meets fantasy.</p>
								<p class="indent">... where friendships last a lifetime.</p>
								<p class="indent">... unites adventurers since 1997!</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<span class="corners bottom"></span>
</div>
@stop
