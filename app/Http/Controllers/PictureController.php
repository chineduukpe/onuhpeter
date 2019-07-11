<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Picture;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    //
    public function index(){

        return view('picture.index');
    }

    public function post(Request $request){
        $picture = new Picture;
        $image_url = time().'.'.$request->file('picture')->getClientOriginalExtension();
        $image_path = 'images';

        $picture->picture_url = $image_path.'/'.$image_url;
        $picture->picture_name = $request->picturename;
        $picture->user_id = Auth::user()->id;

        $request->file('picture')->move(storage_path('app/public/'.$image_path),$image_url);
        Storage::disk('s3')->put($image_path,$image_url);
//        return asset($image_path.'/'.$image_url);

        $picture->save();
        return redirect()->back(201)->with('success','You have added a new Photo');

    }
}
