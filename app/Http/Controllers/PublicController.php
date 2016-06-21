<?php namespace App\Http\Controllers;

use App\Models\Page;

class PublicController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Public Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "presentation pages" for the application and
	| is configured to allow anyone (logged in or not).
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Show the appropriate view depending on the slug.
	 *
	 * YOU MAY WANT TO MODIFY THIS
	 * Right now it only loads some dummy views.
	 *
	 * @return Response
	 */
//	public function page($slug)
//	{
//		// get the corresponding page for that slug
//		$page = Page::findBySlugOrId($slug)->withFakes();
////
////		 if there is such a page
//		if ($page && $page->translation_lang == \App::getLocale()) {
////			 load the proper template
//			return view('page_templates.'.$page->template, ['page' => 'show']);
//		}
//
//		abort(404);
//	}

}
