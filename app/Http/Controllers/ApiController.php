<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function search(Request $request){
        if($request['query']){
            $client = new Client();
            $res = $client->request('get', 'http://api.tvmaze.com/search/shows?q='.$request['query']);

            $result= json_decode($res->getBody()->getContents()) ;
            return view('welcome',compact('result'));
        }else{
            return view('welcome');
        }

    }
}
