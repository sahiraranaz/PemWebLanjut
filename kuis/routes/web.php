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

/*Route::get('/view',function(){
    return view('view');
});*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@about')->name('about');
Route::get('/article/{id}','ArticleController@article');
Route::get('/home/search','HomeController@search');
Auth::routes();

Route::get('/logout',function(){
    $logout=Auth::logout();
    return view('auth.login');
});

Route::get('/',function(){
    return view('auth.login');
});
/*Route::get('/teslogin',function(){
    return view('login.login');
});*/

Route::get('/view','HomeController@view')->name('view');
Route::get('/manage', 'ArticleController@index')->name('manage'); 
Route::get('/manage/article/add','ArticleController@add');
Route::post('/manage/article/create','ArticleController@create')->name('create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update'); 
Route::get('/article/delete/{id}','ArticleController@delete'); 

Gate::define('manage-articles', function($user){
    return $user->roles == "Administrator";
});
Gate::define('user-display', function($user){
    return $user->roles == "User";
});
Gate::define('usertable-manage', function($user){
    return $user->roles == "Administrator";
});
Route::get('/user', 'UserController@user')->name('user'); 
Route::get('/user/add','UserController@adduser');
Route::post('/user/create','UserController@createuser')->name('createuser');
Route::get('/user/edit/{id}','UserController@edituser');
Route::post('/user/update/{id}','UserController@updateuser'); 
Route::get('/user/delete/{id}','UserController@deleteuser'); 

Route::get('/manage/article/cetak_pdf', 'ArticleController@cetak_pdf')->name('cetak_pdf');
Route::get('/user/cetakUser_pdf', 'UserController@cetakUser_pdf')->name('cetakUser_pdf');