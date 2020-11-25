<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Gate;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        /*$this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });*/
    }
    public function user(){
        $users = User::all();
        return view('user',['users' => $users]);
    }
    public function adduser(){         
        return view('adduser');
    }
    public function createuser(Request $request){
        if($request->file('image')){
            $name_image = $request->file('image')->store('imagesUser','public');
        }
        $profile = $request->file('image')->store('imagesUser','public');
        $add = new User();
        $add->name=$request->name;
        $add->email=$request->email;
        $add->password=\Hash::make($request->password);
        $add->roles=$request->roles;
        $add->profile=$profile;
        $add->save();
        return redirect('/user');
    }
    public function edituser($id){         
        $users = User::find($id);         
        return view( 'edituser',['users'=>$users]);     
    }
    public function updateuser($id, Request $request){         
        $users = User::find($id);         
        $users->name = $request->name; 
        $users->email=$request->email;        
        $users->password=\Hash::make($request->password);        
        $users->roles = $request->roles;         
        if($users->profile && file_exists(storage_path('app/public/' . $users->profile))){
            \Storage::delete('public/'.$users->profile);
        }
        $profile = $request->file('image')->store('imagesUser','public');
        $users->profile = $profile;       
        $users->save();         
        return redirect('/user');     
    }
    public function deleteuser($id){         
        $users = User::find($id);         
        $users->delete();         
        return redirect('/user'); 
    }
    public function cetakUser_pdf(){
        $users = User::all();
        $pdf = PDF::loadview('users_pdf',['users'=>$users]);
        return $pdf->stream();
    }
}
