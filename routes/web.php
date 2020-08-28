<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

	
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

	// frontend start
	Route::get('/','frontend\PagesController@index')->name('home');
	Route::get('/about','frontend\PagesController@about')->name('about');
	Route::get('/contact','frontend\PagesController@contact')->name('contact');
	Route::get('/ui','frontend\PagesController@ui')->name('ui');
	Route::get('/ccna','frontend\PagesController@ccna')->name('ccna');
	Route::get('/ccnp','frontend\PagesController@ccnp')->name('ccnp');
	Route::get('/design','frontend\PagesController@design')->name('design');
	Route::get('/digital','frontend\PagesController@digital')->name('digital');
	Route::get('/app','frontend\PagesController@app')->name('app');
	Route::get('/python','frontend\PagesController@python')->name('python');
	Route::get('/graphics','frontend\PagesController@graphics')->name('graphics');
	// portfolio
	Route::get('/portfolio','frontend\PagesController@portfolio')->name('portfolio');
	Route::get('/client','frontend\PagesController@client')->name('client');
	Route::get('/admission','frontend\PagesController@admission')->name('admission');
	Route::get('/process','frontend\PagesController@process')->name('process');
	Route::get('/recent','frontend\PagesController@recent')->name('recent');
	Route::get('/story','frontend\PagesController@story')->name('story');
	Route::get('/welcome','frontend\PagesController@welcome')->name('welcome');



	// Backend start
	 Route::get('/student','backend\PagesController@index')->name('dashboard');
	 Route::get('/student/all','backend\StudentsController@student')->name('student');
	 Route::get('student/view/{id}','backend\PagesController@view_student')->name('student.view');
	 Route::get('student/studentall/{id}','backend\PagesController@viewAll');
	Route::post('/student-store','backend\StudentsController@store')->name('student.store');
	


// contact
	Route::get('/contact/all','backend\StudentsController@contact')->name('contact.all');
	Route::post('/contact-store','backend\StudentsController@contac_store')->name('contact.store');

// slider

	//Slider route
	 Route::get('slider/','backend\SliderController@index')->name('slider.index');
	  Route::post('slider/store','backend\SliderController@store');
	 Route::get('slider/edit/{id}','backend\SliderController@edit');
	 Route::post('slider/update','backend\SliderController@update');
	 Route::get('slider/delete/{id}','backend\SliderController@destroy');

// portfolio
	 Route::get('admin-port/','backend\PortfolioController@index')->name('portfolio.index');
	 Route::post('admin-port/store','backend\PortfolioController@store');
	 Route::get('admin-port/edit/{id}','backend\PortfolioController@edit');
	 Route::post('admin-port/update','backend\PortfolioController@update');
	 Route::get('admin-port/delete/{id}','backend\PortfolioController@destroy');

	 // Successful preview
	 Route::get('success/','backend\SuccessorController@index')->name('successor.index');
	 Route::post('success/store','backend\SuccessorController@store');
	 Route::get('success/edit/{id}','backend\SuccessorController@edit');
	 Route::post('success/update','backend\SuccessorController@update');
	 Route::get('success/delete/{id}','backend\SuccessorController@destroy');

 // Freelancing preview
	 Route::get('freelance/','backend\FreelanceController@index')->name('freelance.index');
	 Route::post('freelance/store','backend\FreelanceController@store');
	 Route::get('freelance/edit/{id}','backend\FreelanceController@edit');
	 Route::post('freelance/update','backend\FreelanceController@update');
	 Route::get('freelance/delete/{id}','backend\FreelanceController@destroy');


