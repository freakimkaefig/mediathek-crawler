@extends('layout.main')

@section('content')
	<!-- START streaming/video -->
	@if(Session::has('video-id'))
		<div id="video-wrapper">
			<video id="video" class="video-js vjs-default-skin" controls preload="auto"></video>
		</div>
		<div id="info-wrapper"></div>
		<input id="video-id" type="hidden" value="{{ Session::get('video-id') }}">
	@else
		{{ Redirect::route('home')->with('global-warning', 'Es ist ein Fehler aufgetreten. Versuchen Sie es später erneut.') }}
	@endif
	<!-- END streaming/video -->
@stop