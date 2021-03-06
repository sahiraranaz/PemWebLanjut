<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\User;
use Illuminate\Support\Facades\Gate;
use PDF;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        /*$this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });*/
    }
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
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        $add = new Film();
        $add->title=$request->title;
        $add->trailer=$request->trailer;
        $add->content=$request->content;
        $add->featured_image=$image_name;
        $add->save();
        return redirect('/manage');
    }
    public function edit($id){         
        $films = Film::find($id);         
        return view( 'edit',['films'=>$films]);     
    }
    public function update($id,Request $request){    
        $films = Film::find($id);         
        $films->title = $request->title; 
        $films->trailer=$request->trailer;        
        $films->content = $request->content;  
        if($films->featured_image && file_exists(storage_path('app/public/' . $films->featured_image))){
            \Storage::delete('public/'.$films->featured_image);
        }
        $image_name = $request->file('image')->store('images','public');
        $films->featured_image = $image_name;
        $films->save();
               
        return redirect('/manage');     
    } 
    public function delete($id){         
        $films = Film::find($id);         
        $films->delete();         
        return redirect('/manage');     
    } 
    public function cetak_pdf(){
        $films = Film::all();
        $pdf = PDF::loadview('articles_pdf',['films'=>$films]);
        return $pdf->stream();
    }
}