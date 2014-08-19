<!DOCTYPE html>
<html>
	<head>
		<title>Mediathek Crawler</title>
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/video-js.css') }}
		{{ HTML::style('css/jquery-ui.min.css') }}
		{{ HTML::style('css/jquery-ui.theme.css')}}
		{{ HTML::style('css/style.css') }}

		{{ HTML::script('js/libs/jquery/jquery.min.js') }}
		{{ HTML::script('js/libs/jquery/jquery-ui.min.js') }}
		{{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>			
		@include('layout.header')
		<div class="container">

		<div class="visible-xs">
	
			<button class="btn btn-default dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-align-justify"></span></a>
      			<ul class="dropdown-menu" style="border-color: white; border-radius: 5">
        		  <li><a href="{{ URL::route('playlists') }}">Playliste</a></li>
        		  <li class="divider"></li>
			      <li><a href="{{ URL::route('bookmarks') }}">Merkliste</a></li>
			      <li class="divider"></li>
			      <li><a href="#">Live/Mediatheken</a></li>
			      <li class="divider"></li>
			      <li><a href="#">Rubriken</a></li>
			      <li class="divider"></li>
			      <li><a href="#">Kontakt</a></li>
			      <li class="divider"></li>
			      <li><a href="#">Impressum</a></li>
			      <li class="divider"></li>
			      <li><a href="{{ URL::route('account-my-account') }}">Einstellungen</a></li>
        		</ul>
			</button>

			<!-- <div class="nav-collapse collapse" style="position: absolute; z-index: 99">
			    <ul class="nav navbar-nav" style="background-color: #1b1b1b">
			      <li class="active"><a href="{{ URL::route('playlists') }}">Playliste</a></li>
			      <li><a href="{{ URL::route('bookmarks') }}">Merkliste</a></li>
			      <li><a href="#">Live/Mediatheken</a></li>
			      <li><a href="#">Rubriken</a></li>
			      <li><a href="#">Kontakt</a></li>
			      <li><a href="#">Impressum</a></li>
			      <li><a href="{{ URL::route('account-my-account') }}">Einstellungen</a></li>
			    </ul>
			</div> -->
		</div>
		
			<!-- <div class="row">
				@if(Session::has('global-danger'))
					<div class="alert alert-danger">{{ Session::get('global-danger') }}</div>
				@endif
				@if(Session::has('global-warning'))
					<div class="alert alert-warning">{{ Session::get('global-warning') }}</div>
				@endif
				@if(Session::has('global-success'))
					<div class="alert alert-success">{{ Session::get('global-success') }}</div>
				@endif
			</div> -->
		</div>
				@if(Session::has('global-danger'))
					<div id="feedback-container-danger" class="container-fluid feedback-container"><h4 class="text-center">{{ Session::get('global-danger') }}</h4></div>
				@endif
				@if(Session::has('global-warning'))				
					<div id="feedback-container-warning" class="container-fluid feedback-container"><h4 class="text-center">{{ Session::get('global-warning') }}</h4></div>
				@endif
				@if(Session::has('global-success'))
					<div id="feedback-container-success" class="container-fluid feedback-container"><h4 class="text-center">{{ Session::get('global-success') }}</h4></div>
				@endif
					<div id="feedback-container" class="container-fluid feedback-container"><h4 class="text-center"></h4></div>


		<div class="container-fluid">
			@yield('content')
		</div>
		<a href="#">
		<div id="to-top" class="visible-xs">
		<span  class="glyphicon glyphicon glyphicon-chevron-up text-center"></span>
		</div>
		</a>
		@include('layout.footer')

		@include('mediathek-crawler-js')

	</body>
</html>