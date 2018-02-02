<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Show;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        return view('search');
    }

    public function result(){

        if(!empty(request('query'))){
            $search = request('query');
            $resultMovie = Movie::where('title', 'like', '%'.$search.'%')->get();
            $resultShow = Show::where('title', 'like', '%'.$search.'%')->get();
        }else{
            $error = 'Based on this search no results were found ';

            return view('result', compact('error'));
        }

        return view('/result', compact('resultMovie', 'resultShow'));
    }

}