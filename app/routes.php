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

Route::get('/', 'HomeController@viewHome');
Route::get('/about-us', 'HomeController@viewAbout');
Route::get('/marine-consult', 'HomeController@viewConsult');
Route::get('/marine-supplies', 'HomeController@viewSupplies');
Route::get('/support', 'HomeController@viewSupport');
Route::get('/oil-and-gas', 'HomeController@viewOil');
Route::get('/contact', 'HomeController@viewContact');
