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

Route::get('/', function () {
    return view('welcome');
});
Route::get('user','pageController@getUser',function () {

})->name('user');
Route::get('add_user','pageController@getRegister',function () {
		
})->name('add_user');
Route::post('add_user','pageController@postRegister',function () {
		
})->name('add');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
