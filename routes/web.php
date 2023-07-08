<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/home', 'HomeController@index')->name('frontend.home');
    Route::get('/about', 'HomeController@aboutPage')->name('frontend.about');
    Route::get('/services', 'HomeController@servicePage')->name('frontend.service');
    Route::get('/portfolio', 'HomeController@portfolioPage')->name('frontend.portfolio');
    Route::get('/contact-us', 'HomeController@contactUsPage')->name('frontend.contact');

    // portfolio pages 
    Route::get('/single-work', 'HomeController@singleWork')->name('frontend.single.work');
  

    

});

