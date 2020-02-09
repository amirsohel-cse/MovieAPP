<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
class MovieController extends Controller
{
    public function add_movie()
    {
        return view('admin.add_movie');
    }
    public function save_movie(Request $request)
    {

        $store = new movie();
        $store->movie_name = $request->movie_name;
        $store->movie_short_description = $request->short_description;
        $image = $request->file('movie_image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'movie_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $store->movie_image = $image_url;

                $store->save();
                Session::put('message','Movie added successfully !!' );
                return Redirect::to('/add_movie');
            }

        }
        $store->movie_image = ' ';

        $store->save();
        Session::put('message','Movie added without Image !!' );
        return Redirect::to('/add_movie');

    }
    public function all_movie()
    {
       $all_movie_info = movie::all();

        return view('admin.all_movie')->with('all_movie_info',$all_movie_info);
    }
    public function delete_movie($id)
    {
        movie::where('id',$id)->delete();
        Session::put('message','movie Deleted succesfully !! ');
        return Redirect::to('/all_movie');
    }
    public function edit_movie($id)
    {

        $movie_info= movie::where('id',$id)->first();

        return view('admin.edit_movie')->with('movie_info',$movie_info);


    }
    public function update_movie(Request $request, $id)
    {
     //  dd($id);
        $store = movie::find($id);
        $store->movie_name = $request->movie_name;
        $store->movie_short_description =  $request->movie_short_description;

            $image = $request->file('movie_image');
            if($image){
                $image_name= Str::random(40);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'movie_image/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);
                if($success){
                    $store->movie_image= $image_url;

                   $store->save();
                    Session::put('message','Movie Updated successfully !!' );
                    return Redirect::to('/all_movie');
                }

            }


        $store->movie_image = $request->image_url;
        $store->save();
        Session::put('message','Movie Updated successfully !!' );
        return Redirect::to('/all_movie');
    }
}
