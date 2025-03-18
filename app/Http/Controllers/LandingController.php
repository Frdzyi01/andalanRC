<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class LandingController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with('images')->get();
    
        return view('index', compact('projects'));
    }

}
