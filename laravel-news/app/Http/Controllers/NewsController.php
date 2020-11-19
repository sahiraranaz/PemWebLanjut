<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller
{
    public function getData(){
        $client = new Client();
        $request = $client->get('https://newsapi.org/v2/top-headlines?country=us&apiKey=be7b9bc18e5642949d0d8af5cfca74e9');
        $response = $request->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }  
    public function searchData(Request $request){
        $client = new Client();
        $query = $request->keyword;
        $req = $client->get('https://newsapi.org/v2/top-headlines?country=us&apiKey=be7b9bc18e5642949d0d8af5cfca74e9&q='.$query);
        $response = $req->getBody();
        $resultSearch = json_decode($response);
        return view('home',['artikel'=>$resultSearch->articles]);
       }
            
}
