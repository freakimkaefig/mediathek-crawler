<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* ############
 * ##  HOME  ##
 * ############
 */
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@getHome'
));


/* ###########################
 * ##  AUTHENTICATED GROUP  ##
 * ###########################
 */
Route::group(array('before' => 'auth'), function() {
	
	Route::group(array('before' => 'csrf'), function() {

		/* ACCOUNT */
		//Change password (POST)
		Route::post('/account/change-password', array(
			'as' => 'account-change-password-post',
			'uses' => 'AccountController@postChangePassword'
		));
	});

	/* ACCOUNT */
	// Change password (GET)
	Route::get('/account/change-password', array(
		'as' => 'account-change-password',
		'uses' => 'AccountController@getChangePassword'
	));

	// Sign out (GET)
	Route::get('/account/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));

	// My account (GET)
	Route::get('/account/my-account', array(
		'as' => 'account-my-account',
		'uses' => 'AccountController@getMyAccount'
	));

	// All Playlists (GET)
	Route::get('/playlists', array(
		'as' => 'playlists',
		'uses' => 'PlaylistsController@getAllPlaylists' 
	));

	Route::post('/playlists/new', array(
		'as' => 'new-playlist',
		'uses' => 'PlaylistsController@savePlaylist' 
	));
});


/* #############################
 * ##  UNAUTHENTICATED GROUP  ##
 * #############################
 */
Route::group(array('before' => 'guest'), function() {

	// ### CSRF protection group ###
	Route::group(array('before' => 'csrf'), function() {

		/* ACCOUNT */
		//Sign in (POST)
		Route::post('/account/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));
		
		// Create account (POST)
		Route::post('/account/create', array(
			'as' => 'account-create-post',
		 	'uses' => 'AccountController@postCreate'
		));

		// Forgot password
		Route::post('/account/forgot-password', array(
			'as' => 'account-forgot-password-post',
			'uses' => 'AccountController@postForgotPassword'
		));

	});

	/* ACCOUNT */
	// Forgot password
	Route::get('/account/forgot-password', array(
		'as' => 'account-forgot-password',
		'uses' => 'AccountController@getForgotPassword'
	));

	Route::get('/account/recover/{code}', array(
		'as' => 'account-recover',
		'uses' => 'AccountController@getRecover'
	));
	
	// Sign in (GET)
	Route::get('/account/sign-in', array(
		'as' => 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
	));
	
	// Create account (GET)
	Route::get('/account/create', array(
		'as' => 'account-create',
	 	'uses' => 'AccountController@getCreate'
	));

	// Activate account (GET)
	Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'
	));

});



/* ######################
 * ##  EVERYONE GROUP  ##
 * ######################
 */

// ### CSRF protection group ###
Route::group(array('before' => 'csrf'), function() {

	/* SEARCH */
	Route::post('/suche', array(
		'as' => 'search-post',
		'uses' => 'MediathekController@postSearch'
	));
});


/* SEARCH */
// Search results
Route::get('/suche', array(
	'as' => 'search-results',
	'uses' => 'MediathekController@getSearchResults'
));


Route::get('/video/{id}', array(
	'as' => 'video-id',
	'uses' => 'MediathekController@getVideoById'
));

/* CATEGORIES */
Route::get('/rubrik/{category}', array(
	'as' => 'category',
	'uses' => 'MediathekController@getCategory'
));


/* ############
 * ##  TEST  ##
 * ############
 */
// Route for streaming-tests
Route::get('/streaming-test', function() {
	return View::make('test.streaming-test');
});

Route::get('/update', array(
	'as' => 'update',
	'uses' => 'MediathekController@updateCategories'
));