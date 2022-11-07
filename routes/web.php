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

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('index')->middleware('http_log');
Route::get('error', 'WebsiteController@error')->name('error')->middleware('http_log');
Route::get('/maint', 'WebsiteController@maintainance')->name('maint')->middleware('http_log');
Route::get('list', 'WebsiteController@list')->name('list')->middleware('http_log');
Route::get('help', 'WebsiteController@help')->name('help')->middleware('http_log');
Route::get('page/branches', 'WebsiteController@branches')->name('branches')->middleware('http_log');

Route::get('get_image/{url}','WebsiteController@get_image')->name("getImage");


Route::group(['middleware'=>'language'],function ()
{
    //your translation routes
});
Route::get('lang/{lang}', 'LocalizationController@index')->name('lang')->middleware('http_log');
Route::get('category/{slug}', 'WebsiteController@category')->name('category')->middleware('http_log');
Route::get('post/{slug}', 'WebsiteController@post')->name('post')->middleware('http_log');
Route::get('directive/{slug}', 'WebsiteController@directive')->name('directive')->middleware('http_log');
Route::get('loan/{slug}', 'WebsiteController@loan')->name('loan')->middleware('http_log');
Route::get('page/contact', 'WebsiteController@showContactForm')->name('contact.show')->middleware('http_log');
Route::get('page/{slug}', 'WebsiteController@page')->name('page')->middleware('http_log');

Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit')->middleware('http_log');

Route::get('maillist/create','MailListController@create')->middleware('http_log');
Route::get('complaint','ComplaintController@create')->middleware('http_log');
Route::post('maillistaction','MailListController@store')->middleware('http_log');

Route::post('complaintaction','ComplaintController@store');
Route::get('calc','WebsiteController@calc');

Route::group(['middleware' => 'throttle:60,1'], function () {

Route::get('/home', 'HomeController@index')->name('home')->middleware('http_log');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('roles','RoleController')->middleware('http_log');
    Route::resource('users','UserController');
    Route::resource('categories', 'CategoryController')->middleware('http_log');
    Route::resource('posts', 'PostController')->middleware('http_log');
	Route::resource('latests', 'LatestController')->middleware('http_log');
    Route::resource('pages', 'PageController')->middleware('http_log');
    Route::resource('galleries', 'GalleryController')->middleware('http_log');
    Route::resource('sliders', 'SliderController')->middleware('http_log');
    Route::resource('abouts', 'AboutController')->middleware('http_log');
    Route::resource('questions', 'QuestionController')->middleware('http_log');
    Route::resource('footers', 'FooterController');
    Route::resource('maillists','MailListController')->middleware('http_log');
    Route::resource('color','ColorController')->middleware('http_log');
	     Route::resource('loans','LoanController')->middleware('http_log');
	   Route::resource('directives', 'DirectiveController')->middleware('http_log');
	 Route::resource('services', 'ServiceController')->middleware('http_log');
    Route::resource('complaints','ComplaintController')->middleware('http_log');
    Route::post('complaints', 'ComplaintController@send')->name('complaint.send')->middleware('http_log');
     Route::resource('settings','SettingController')->middleware('http_log');
      Route::post('color/reset/{id}','ColorController@reset')->name('color.reset')->middleware('http_log');
     
  
});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
