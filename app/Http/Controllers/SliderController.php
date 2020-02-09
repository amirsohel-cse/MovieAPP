<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }
    public function save_slider(Request $request)
    {
        $store = new slider();
        $image = $request->file('slider_image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'slider_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $store->slider_image = $image_url;
                $store->save();
                Session::put('message','slider added successfully !!' );

                return Redirect::to('/add_slider');
            }

        }
        $store->slider_image = ' ';
        $store->save();
        Session::put('message','slider added  without image!!' );
        return Redirect::to('/add_slider');
    }
    public function all_slider()
    {

        $all_slider = slider::all();

        return view('admin.all_slider')->with('all_slider',$all_slider);
    }
    public function delete_slider($slider_id)
    {
        slider::where('slider_id',$slider_id)->delete();

        Session::put('message','slider Deleted succesfully !! ');
        return Redirect::to('/all_slider');
    }

}
