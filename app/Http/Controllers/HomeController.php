<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use App\movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
class HomeController extends Controller
{
    public function index()
    {
        $movie_lists = movie::paginate(4);
        $slider_lists = slider::all();
        return view('movie')
            ->with('movie_lists' ,$movie_lists)
            ->with('slider_lists',$slider_lists);
    }
    public function search(Request $request)
    {
       // dd(request()->all());
        $key = $request->search;

        $all_movie_info = movie::where('movie_name','LIKE','%'.$key.'%')
            ->orWhere('movie_short_description','LIKE','%'.$key.'%')->get();


        return view('search')->with('all_movie_info', $all_movie_info);
    }
}
