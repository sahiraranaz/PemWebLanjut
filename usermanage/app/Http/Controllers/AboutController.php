<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function about(){
        $films = Film::all();
    	return view('about.aboutboot',['comment'=>$films]);
    }
    public function search(Request $request){
        $search =$request->search;
        $films=DB::table('films')->where('title','like',"%".$search."%")->paginate();
        return view('about.aboutboot',['for'=>$films]);
}
}