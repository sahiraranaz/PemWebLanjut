<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use Illuminate\Support\Facades\DB;
class HomeController1 extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){         
        $films = Film::all();
        return view('home.homeboot',['for'=>$films]);
    } 
    public function search(Request $request){
        $search =$request->search;
        $films=DB::table('films')->where('title','like',"%".$search."%")->paginate();
        return view('home.homeboot',['for'=>$films]);
    }
}