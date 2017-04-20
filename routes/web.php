<?php

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

Route::get('/', 'HomeController@index');
Route::get('/products', 'ProductController@index');
Route::get('/about-us', 'ContentController@aboutus');
Route::get('/services', 'ContentController@services');
Route::get('/contact-us', 'ContentController@contactus');
Route::get('/projects', 'ProjectController@index');
Route::get('/products/{show}', array(
    'as'    => 'products.show',
    'uses'  => 'ProductController@show'
));
Route::get('/projects/{show}', array(
    'as'    => 'projects.show',
    'uses'  => 'ProjectController@show'
));
Auth::routes();

Route::resource('contents', 'ContentController');
Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth', 'admin']], function () {
	Route::resource('products', 'ProductController');
	Route::resource('contents', 'ContentsController');
	Route::resource('photos', 'PhotosController');
	Route::resource('projects', 'ProjectController');
	Route::resource('settings', 'SettingController');
	Route::resource('ratings', 'RatingController');
	Route::resource('faqs', 'FaqController');
	Route::resource('clients', 'ClientController');
    Route::resource('enquiries', 'EnquiryController');
    Route::resource('banners', 'BannerController');
    Route::any('banners/{id}/change_status', array(
        'as' => 'banners.change_status',
        'uses' => 'BannerController@change_status'
    ));
	Route::any('products/{id}/change_status', array(
        'as' => 'products.change_status',
        'uses' => 'ProductController@change_status'
    ));
    Route::any('projects/{id}/change_status', array(
        'as' => 'projects.change_status',
        'uses' => 'ProjectController@change_status'
    ));
    Route::any('contents/{id}/change_status', array(
        'as' => 'contents.change_status',
        'uses' => 'ContentsController@change_status'
    ));
    Route::any('faqs/{id}/change_status', array(
        'as' => 'faqs.change_status',
        'uses' => 'FaqController@change_status'
    ));
    Route::any('ratings/{id}/change_status', array(
        'as' => 'ratings.change_status',
        'uses' => 'RatingController@change_status'
    ));
    Route::any('clients/{id}/change_status', array(
        'as' => 'clients.change_status',
        'uses' => 'ClientController@change_status'
    ));
});
