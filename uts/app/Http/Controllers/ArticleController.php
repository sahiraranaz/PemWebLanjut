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
    public function index(){
        $films = Film::all();
        return view('manage',['films' => $films]);
    }
    public function add(){         
        return view('addarticle');
    }
    public function create(Request $request){
        $add = new Film();
        $add->title=$request->title;
        $add->trailer=$request->trailer;
        $add->content=$request->content;
        $add->featured_image=$request->image;
        $add->save();
        return redirect('/manage');
    }
    public function edit($id){         
        $films = Film::find($id);         
        return view( 'edit',['films'=>$films]);     
    }
    public function update($id, Request $request){         
        $films = Film::find($id);         
        $films->title = $request->title; 
        $films->trailer=$request->trailer;        
        $films->content = $request->content;         
        $films->featured_image = $request->image;         
        $films->save();         
        return redirect('/manage');     
    } 
    public function delete($id){         
        $films = Film::find($id);         
        $films->delete();         
        return redirect('/manage');     
    } 
 
 
 
}