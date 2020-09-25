<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cache;
use App\Article;
class HomeController extends Controller
{
    
    public function index(){         
        $articles = Article::all();
        return view('home.homeboot',['for'=>$articles]);
    } 
    public function __invoke(Request $_request){
        $articles = Article::all();
        $value = Cache::rememberForever('articles',function(){
            return Article::all();
        });
        $page = 'Article';
        $articles = Cache::get('articles');
        $articles = json_decode(json_encode($articles));
        return view('home')->with(compact('articles'));
    }
}
