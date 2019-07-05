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


Route::get('/', 'HomepageController@index');
Route::get('/history', 'HomepageController@history');


Route::get('/admin/dashboard', 'Backend\\DashboardController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');

    });


    Route::resource('district', 'Backend\\DistrictController');
    Route::resource('article', 'Backend\\ArticleController');
    Route::resource('category', 'Backend\\CategoryController');
    Route::resource('banner', 'Backend\\BannerController');
    Route::resource('department', 'Backend\\DepartmentController');
    Route::resource('travel', 'Backend\\TravelController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
