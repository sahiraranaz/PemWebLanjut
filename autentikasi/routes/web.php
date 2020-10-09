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



/*Auth::routes();
Route::get('/', 'WelcomeController@welcome');
Route::get('/about','AboutController@about')->name('about');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/search','HomeController@search');
Route::get('/article/{id}','ArticleController@article');
Route::get('/master', 'MasterController@master')->name('master');*/


//Route::get('/',function(){
   // return view('home.homeboot');
//});

// Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@about')->name('about');
Route::get('/article/{id}','ArticleController@article');
Auth::routes();

Route::get('/logout',function(){
    $logout=Auth::logout();
    return view('auth.login');
});

Route::get('/',function(){
    return view('auth.login');
});