@extends('theme::app')

@section('title', 'Account Management')
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
			
			<h2>Welcome to your account!</h2>

			<div class="table">
				<header class="header">
					<div class="borders">
						<span class="edges top"></span>
						Account Status
						<span class="edges bottom"></span>
					</div>
				</header>

				<div class="content">
					<div class="box">
						<div class="inner-box">
							<div class="buttons-right">
								<a href="{{ url('/account/manage') }}" class="blue-button">
									<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_manageaccount.gif') }}" alt="Manage Account">
								</a>
								<a href="#" class="green-button">
									<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_getpremium.gif') }}" alt="Get Premium">
								</a>
								<a href="{{ url('/account/logout') }}" class="red-button">
									<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_logout.gif') }}" alt="Logout">
								</a>
							</div>

							<table height="85" cellspacing="0" cellpadding="0" border="0">
								<tr>
									<td valign="middle" width="55">
										<img src="{{ asset('/pandaac/theme-tibia/img/account-status_red.gif') }}">
									</td>
									<td valign="middle">
										<h4 class="free">Free Account</h4>
										<small>To benefit from our great premium features, get Premium Time for your account.</small>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<br>

			<div class="table">
				<header class="header">
					<div class="borders">
						<span class="edges top"></span>
						Characters
						<span class="edges bottom"></span>
					</div>
				</header>

				<div class="content">
					<div class="box">
						<table class="table-striped table-hover" cellspacing="0" cellpadding="0" border="0">
							<tr>
								<th class="header" width="40"></th>
								<th class="header">Name</th>
								<th class="header" width="120">World</th>
								<th class="header" width="90">Status</th>
								<th class="header" width="90"></th>
							</tr>
							<tr>
								<td align="center" valign="middle">1.</td>
								<td valign="middle">
									<span>Chris of Askara</span>
									<small>Knight - Level 8</small>
								</td>
								<td>Askara</td>
								<td>Hidden</td>
								<td></td>
							</tr>
							<tr>
								<td align="center" valign="middle">2.</td>
								<td valign="middle">
									<span>Chris of Candia</span>
									<small>Knight - Level 8</small>
								</td>
								<td>Candia</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td align="center" valign="middle">3.</td>
								<td valign="middle">
									<span>Chris of Celesta</span>
									<small>Knight - Level 8</small>
								</td>
								<td>Celesta</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td align="center" valign="middle">4.</td>
								<td valign="middle">
									<span>Chris of Olympa</span>
									<small>Elite Knight - Level 192</small>
								</td>
								<td>Olympa</td>
								<td></td>
								<td></td>
							</tr>
							<tr class="active">
								<td align="center" valign="middle">
									<a href="#" class="play-button"></a>
								</td>
								<td valign="middle">
									<span>Chris of Antica</span>
									<small>Paladin - Level 16</small>
								</td>
								<td>Antica</td>
								<td></td>
								<td align="center" valign="middle">
									[<a href="#">Edit</a>]<br>
									[<a href="#">Delete</a>]
								</td>
							</tr>
							<tr>
								<td align="center" valign="middle">6.</td>
								<td valign="middle">
									<span>Chris of Secura</span>
									<small>Elder Druid - Level 87</small>
								</td>
								<td>Secura</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td align="center" valign="middle">7.</td>
								<td valign="middle">
									<span>Chris of Nova</span>
									<small>Master Sorcerer - Level 233</small>
								</td>
								<td>Nova</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>

					<div style="height: 31px;">
						<div class="buttons-right">
							<a href="#" class="blue-button">
								<img src="{{ asset('/pandaac/theme-tibia/img/_sbutton_createcharacter.gif') }}" alt="Create Character">
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<span class="corners bottom"></span>
</div>
@stop
