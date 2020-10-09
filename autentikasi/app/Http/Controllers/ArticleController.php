<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class ArticleController extends Controller
{
    
    public function article($id){         
        $films= Film::find($id);
        return view('post.post',['films'=>$films]);
    } 
    public function search(Request $request){
        $search =$request->search;
        $films=DB::table('films')->where('title','like',"%".$search."%")->paginate();
        return view('post.post',['for'=>$films]);
} 
}