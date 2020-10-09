<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
            $films = Film::all();
            return view('home.homeboot',['for'=>$films]);
        } 
        public function search(Request $request){
            $search =$request->search;
            $films=DB::table('films')->where('title','like',"%".$search."%")->paginate();
            return view('home.homeboot',['for'=>$films]);
        }
    
}