<?php

namespace App\Http\Controllers;
use DB,App;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function displayAll(){
        $posts = App\Posts::all();
        
        return view('posts',[
            'posts'=>$posts
        ]);
    }
}
