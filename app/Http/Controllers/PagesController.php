<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){

        return view('about');

    }
    function contact(){
        $tasks=[
            "Go to School",
            "Go to class",
            "Go to home",
        ];
            return view('contact',[
                'tasks'=>$tasks,
            ]);
    }
}
