<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;

class LandingController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with('images')->get();
        $categories = Category::all(['name', 'slug']);
    
        return view('index', compact('projects','categories'));
    }

}
