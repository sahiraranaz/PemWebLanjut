<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    public function article($id){         
        $articles = Article::find($id);
        return view('post.post',['articles'=>$articles]);
    } 
} 