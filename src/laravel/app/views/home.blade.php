@extends('layout.main')

@section('content')

<?php
	$channel_row_class = 'home-channel col-xs-6 col-sm-4 col-md-2 col-lg-2';
	$category_row_class = 'home-category col-xs-6 col-sm-4 col-md-3 col-lg-2';
?>

<!-- START Carousel -->
<div id="carousel-wrapper" class="row visible-xs">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
      	<ol class="carousel-indicators">
        	<li id="carousel-loading-indicator" data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    </ol>
	    <div class="carousel-inner">
		    <div id="carousel-loading-item" class="item active">
		    	<img src="/images/dummies/ajax-loader.gif" alt="Loading">
		    </div>
	    </div>
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- END Carousel -->

<!-- START Coverflow -->
<div id="flipster-wrapper" class="row hidden-xs">
	<div id="flipster">
		<div id="flipster-loading"><img src="/images/dummies/ajax-loader.gif" alt="Loading"></div>
		<ul id="flipster-slides"></ul>
	</div>
	<div id="flipster-controls">
		<a id="flipster-left" class="flipster-control" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
	    <a id="flipster-right" class="flipster-control" role="button"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<!-- END COverflow -->

<div class="spacer"></div>

<ul id="home-channels" class="container-fluid row">
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('DasErste'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/Das_Erste_2014.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('ZDF'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/ZDF.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('BR'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/br.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('Arte'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/Arte.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('SRF'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/srf.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
	<li class="<?php print $channel_row_class ?>">
		<a href="{{URL::route('channel',array('ORF'))}}">
			<div class="outer">
				<div class="inner">
					<img src="css/images/ORF_logo.png" class="img-responsive col-xs-12" />
				</div>
			</div>
		</a>
	</li>
</ul>
<div class="spacer"></div>
<h2 class="text-center">Rubriken</h2>
<ul id="home-categories" class="container-fluid row">
	
	<!-- <h3>Kategorien:</h3> -->
	<li class="<?php print $category_row_class ?>">
		<a href="{{ URL::route('hot-videos') }}">
			<div>Hot</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{ URL::route('new-videos') }}">
			<div>New</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('politik'))}}">
			<div>Politik</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('sport'))}}">
			<div>Sport</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('kinder'))}}">
			<div>Kinder</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('wissen-kultur'))}}">
			<div>Wissen</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('nachrichten'))}}">
			<div>Nachrichten</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('kino-tv'))}}">
			<div>Kino &amp; TV</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('wirtschaft'))}}">
			<div>Wirtschaft</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('ratgeber-gesundheit'))}}">
			<div>Ratgeber</div>
		</a>
	</li>
	<li class="<?php print $category_row_class ?>">
		<a href="{{URL::route('category',array('unterhaltung'))}}">
			<div>Unterhaltung</div>
		</a>
	</li>
</ul>
<div class="spacer"></div>


</div>
@stop