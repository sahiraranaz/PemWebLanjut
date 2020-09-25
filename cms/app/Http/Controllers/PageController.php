<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function welcome(){
		return ('SELAMAT DATANG');
	}
    public function about(){
    	return 'NAMA : SAHIRA RANA ZAFIRAH <BR> NIM : 1931710046';
    }
    public function articles($page){
    	return 'Halaman artikel dengan id ' .$page;
    }
}
/*Route::get('/', function () {
    return view('SELAMAT DATANG');
});
Route::get('/about', function(){
	return "NAMA : SAHIRA RANA ZAFIRAH <BR> NIM : 1931710046";
});
Route::get('/articles/{page}',function($page){
	return 'Halaman artikel dengan id ' .$page;
});