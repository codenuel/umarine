<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function viewHome()
	{
		return View::make('pages/index');
	}

	public function viewAbout()
	{
		return View::make('pages/about');
	}

	public function viewConsult()
	{
		return View::make('pages/consult');
	}

	public function viewSupplies()
	{
		return View::make('pages/supplies');
	}

	public function viewSupport()
	{
		return View::make('pages/support');
	}

	public function viewOil()
	{
		return View::make('pages/oil-and-gas');
	}

	public function viewContact()
	{
		return View::make('pages/contact');
	}

}
