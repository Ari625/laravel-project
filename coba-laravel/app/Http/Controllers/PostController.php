<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            "title" => "Posts",
            "posts" => post::all()
        ]);
    }

    public function show($slug){
 
    return view('post', [
        "title" => "Single post",
        "post" => post::find($slug)
    ]);
    }
}
