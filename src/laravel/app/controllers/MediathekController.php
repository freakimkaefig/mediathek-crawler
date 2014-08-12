<?php
class MediathekController extends BaseController {
	public function postSearch() {

		// Get search input
		$searchQuery = Input::all();
		$searchString = $searchQuery['search'];

		return Redirect::route('search-results')
			->withInput();
	}

	public function updateCategories() {
		$dasErste = new DasErsteController();
		$dasErste->updateCategories();
	}


	public function getSearchResults() {
		return View::make('search.search')
			->with('isSearch', TRUE);
	}

	public function getSearchResultsMobile() {
		return View::make('search.search_mobile')
			->with('isSearch', TRUE);
	}

	public function getCategory($category) {
		// validate category
		return View::make('search.categories')
			->with('category', $category);
	}

	public function getVideoById($id) {
		return View::make('streaming.video')
			->with('video', $id);		
	}
	public function getNewVideos() {
		return View::make('search.new');

	}
	public function getHotVideos() {
		return View::make('search.hot');

	}
	public function getChannel($channel){
		return View::make('search.channel')
			->with('channel',$channel);

	}
}