<nav>
	<ul>
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		
		@if(Auth::check())
			<li><a href="{{ URL::route('account-sign-out') }}">Abmelden</a></li>
			<li><a href="{{ URL::route('account-change-password') }}">Passwort ändern</a></li>
		@else
			<li><a href="{{ URL::route('account-sign-in') }}">Anmelden</a></li>
			<li><a href="{{ URL::route('account-create') }}">Registrieren</a></li>
			<li><a href="{{ URL::route('account-forgot-password') }}">Passwort vergessen?</a></li>
		@endif
	</ul>
</nav>