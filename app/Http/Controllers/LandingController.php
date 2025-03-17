<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class LandingController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all(); // Ambil semua project
        return view('index', compact('projects')); // Kirim data ke Blade
    }

}
