<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project as projects;
class ProjectsController extends Controller
{
    //index projects controller function
    public function index(){

        $proj = projects::all();
        // return $proj;
    
        return view('projects.index',['projects'=>$proj]);
    }

    public function create(){

        return view('projects.create');
    }
}
