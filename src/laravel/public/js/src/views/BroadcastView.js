//TODO
// welches videoformat in welcher qualität?
// dynamischer wechsel der src attribute?

MediathekCrawler.BroadcastView = (function() {
	var that = {},

	$videoWrapper = null,
	$video = null,
	$infoWrapper = null,

	/**
	 * Public function to initialize the instance of BroadcastView
	 */
	init = function() {
		console.info('MediathekCrawler.BroadcastView.init');
		
		$videoWrapper = $('#video-wrapper');
		$video = $('#video');
		$infoWrapper = $('#info-wrapper');
		$descriptionWrapper = $("#description-wrapper");

		onAddToPlaylist();
		onAddBookmark();
	},

	/**
	 * Public function to render a video by the given id from localStorage
	 * @param {Integer}		Id of the result item in localStorage
	 */
	renderVideoById = function(id) {
		//console.log(id);
		var results_json = localStorage.getItem('mediathek-crawler'),
			results = JSON.parse(results_json);
			result = results._results[id];

		//console.log(result);


		for (var i=result._streams.length-1; i>=0; i--) {
			var source = '<source src="' + result._streams[i]._url + '" type="' + result._streams[i]._type + '">'
			$video.append(source);
			url = result._streams[i]._url;
		}

		var infoElement = 
			'<h3>Titel:</h3>'+
			'<div>' + result._title + '</div>' +
			'<div>' + result._subtitle + '</div>' +
			/*'<div>' + result._details + '</div>' +*/
			'<h3>Zeit:</h3>' +
			'<div>' + result._airtime + '</div>' +
			'<h3>Dauer:</h3>' +
			'<div>' + result._length + '</div>' +
			'<h3>Sender:</h3>' +
			'<div>' + result._station + '</div>';

		
		$infoWrapper.append(infoElement);

		var descriptionElement = '<div>' + result._details + '</div>';
		$descriptionWrapper.append(descriptionElement);

		checkBookmarked(result);


	},
	renderVideoBookmark = function(id){
		console.log("renderVideoBookmark");
		var result = JSON.parse($("#bookmark").val())[0];
		console.log(result);
		var streams = JSON.parse(result.url);
		for (var i=streams.length-1; i>=0; i--) {
			
			console.log(streams[i]._type);
			var source = '<source src="' + streams[i]._url + '" type="' + streams[i]._type + '">'
			$video.append(source);
			url = streams[i]._url;
		}

		var infoElement = 
			'<h3>Titel:</h3>'+
			'<div>' + result.title + '</div>' +
			'<div>' + result.subtitle + '</div>' +
			/*'<div>' + result._details + '</div>' +*/
			'<h3>Zeit:</h3>' +
			'<div>' + result.airtime + '</div>' +
			'<h3>Dauer:</h3>' +
			'<div>' + result.duration + '</div>' +
			'<h3>Sender:</h3>' +
			'<div>' + result.station_id + '</div>';

		
		$infoWrapper.append(infoElement);

		var descriptionElement = '<div>' + result._details + '</div>';
		$descriptionWrapper.append(descriptionElement);
		
		checkBookmarked(result);


	},

	onAddToPlaylist = function(){
		$("#choosePlaylist").click(function(e){
			e.preventDefault();
			$("#selectPlaylist").removeClass("hidden");
		});

		$("#add-to-playlist").click( function(e){
			e.preventDefault();
			$("#selectPlaylist").addClass("hidden");
			$.ajax({
	  			type: "GET",
	 			url: "http://mediathek-crawler/playlists/add/"+$("#select").val()+"/1",
	  			// parameters that you want to pass
				data: {
					"title": result._title,
					"airtime":result._airtime,
					"url": result._streams,
					"duration": result._length,
					"image": result._teaserImages
				},
				dataType: 'json',		
			});
			return false;
		});

		$("#add-to-playlist-cancel").on("click", function(e){
			e.preventDefault();
			$("#selectPlaylist").addClass("hidden");
			return false;
		});
	},
	onAddBookmark = function(){
		$('#addToBookmarks').click(function(e){
			e.preventDefault();
			$("#addToBookmarks").addClass("hidden");
			$("#bookmark-name").removeClass("hidden").html("Gemerkt");
			$.ajax({
				type: "GET",
				url: "http://mediathek-crawler/bookmarks/add/"+$(this).val(),
				data: {
					"title": result._title,
					"airtime":result._airtime,
					"url": result._streams,
					"duration": result._length,
					"image": result._teaserImages
				},
				dataType: 'json',		
			});
		});
	},
	checkBookmarked = function(result){
		var allBookmarks = JSON.parse($("#all-bookmarks").val());
		
		for  (var i in allBookmarks){
			if (allBookmarks[i]['title'] == result._title || allBookmarks[i]['title'] == result.title){
				id = allBookmarks[i]['id'];
				$("#addToBookmarks").addClass("hidden");
				$("#bookmark-name").removeClass("hidden").append("Gemerkt");
				deleteBookmark(id);
			}
		}

		
	},

	deleteBookmark = function(id){
		$("#bookmark-name").click(function(e){
			e.preventDefault();
			$("#addToBookmarks").removeClass("hidden");
			$("#bookmark-name").addClass("hidden");
			$.ajax({
				type: "GET",
				url: "http://mediathek-crawler/bookmarks/delete/"+id,
				data: {},
			});
		})

	};
	/**
	 * Public function to reset the instance of BroadcastView
	 */
	dispose = function() {
		that = {};
	};

	that.init = init;
	that.dispose = dispose;
	that.renderVideoById = renderVideoById;
	that.renderVideoBookmark = renderVideoBookmark;

	return that;
});