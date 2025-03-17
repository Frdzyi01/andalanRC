<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    //
    public function index()
    {
        return view('admin/project');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $projects = Project::select(['id', 'name', 'client', 'date', 'category', 'image', 'link', 'description']);

            return DataTables::of($projects)
                ->editColumn('image', function ($project) {
                    if ($project->image) {
                        $imageUrl = asset('storage/' . ltrim($project->image, '/'));
                        return '<img src="' . $imageUrl . '" class="img-thumbnail" width="50">';
                    }
                    return 'No Image';
                })
                ->addColumn('action', function ($project) {
                    return '<a href="#" class="text-blue-600 hover:underline edit-btn" data-id="'.$project->id.'">Edit</a> | 
                            <a href="#" class="text-red-600 hover:underline delete-btn" data-id="'.$project->id.'">Delete</a>';
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return response()->json(['message' => 'Invalid request'], 400);
    }


    public function saveData(Request $request)
    {
        try {
            $isUpdate = $request->has('id') && !empty($request->id);
            $project = $isUpdate ? Project::find($request->id) : new Project();

            if ($isUpdate && !$project) {
                return response()->json(['message' => 'Project not found.'], 404);
            }

            // Validasi input
            $request->validate([
                'name' => 'required|string|max:255',
                'client' => 'required|string|max:255',
                'date' => 'required|date',
                'category' => 'required|array',
                'category.*' => 'string|max:255',
                'link' => 'nullable|url',
                'description' => 'required|string',
                'image' => $isUpdate ? 'nullable|image|mimes:jpeg,png,jpg|max:2048' : 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Assign data ke model
            $project->name = $request->name;
            $project->client = $request->client;
            $project->date = $request->date;
            $project->category = implode(' ', $request->category);
            $project->link = $request->link;
            $project->description = $request->description;

            // Handle file upload (wajib saat insert, opsional saat update)
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('projects', $filename, 'public');
                $project->image = $filePath;
            }

            $project->save();

            return response()->json([
                'message' => $isUpdate ? 'Project updated successfully!' : 'Project added successfully!',
                'data' => $project
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }


    public function getProject($id)
    {
        $project = Project::find($id);
        return response()->json($project);
    }

    public function deleteData($id)
    {
        try {
            $project = Project::find($id);
    
            if (!$project) {
                return response()->json(['message' => 'Project not found.'], 404);
            }
    
            // Hapus gambar jika ada
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
    
            $project->delete();
    
            return response()->json(['message' => 'Project deleted successfully.'], 200);
    
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }


}
