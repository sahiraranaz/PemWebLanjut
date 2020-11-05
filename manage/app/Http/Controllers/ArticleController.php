<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\User;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');

        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
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
    public function user(){
        $users = User::all();
        return view('user',['films' => $users]);
    }
    public function adduser(){         
        return view('adduser');
    }
    public function createuser(Request $request){
        $add = new User();
        $add->name=$request->name;
        $add->email=$request->email;
        $add->password=\Hash::make($request->password);
        $add->roles=$request->roles;
        $add->save();
        return redirect('/user');
    }
    public function edituser($id){         
        $users = User::find($id);         
        return view( 'edituser',['films'=>$users]);     
    }
    public function updateuser($id, Request $request){         
        $users = User::find($id);         
        $users->name = $request->name; 
        $users->email=$request->email;        
        $users->password=\Hash::make($request->password);        
        $users->roles = $request->roles;         
        $users->save();         
        return redirect('/user');     
    }
    public function deleteuser($id){         
        $users = User::find($id);         
        $users->delete();         
        return redirect('/user'); 
    }
}