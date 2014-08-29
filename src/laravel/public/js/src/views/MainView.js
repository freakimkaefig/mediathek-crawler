MediathekCrawler.MainView = (function() {
	var that = {},
	snapper = null,

	init = function() {
		console.info('MediathekCrawler.MainView.init');
		
		snapper = new Snap({
			element: document.getElementById('content'),
			disable: 'right'
		});

		$('#flipster').flipster({
			style: 'carousel',
			enableButtons: true
		});

		myToggleButton = document.getElementById('mobile-menu-button');
		myToggleButton.addEventListener('click', function(){

		    if( snapper.state().state=="left" ){
		        snapper.close();
		    } else {
		        snapper.open('left');
		    }

		});

		if($('#xs-helper').is(':visible')) {
			snapper.enable();
		} else {
			snapper.disable();
		}

		$(window).on('resize', onResizeApp); 

		$("#to-top").on("click",toTop);
	},

	onResizeApp = function(event) {
		if($('#xs-helper').is(':visible')) {
			snapper.enable();
		} else {
			snapper.disable();
		}
	},

	toTop = function(){
		$('#content').animate({scrollTop: 0}, 2000);
	},

	dispose = function() {
		that = {};
	};

	that.init = init;
	that.dispose = dispose;

	return that;
});