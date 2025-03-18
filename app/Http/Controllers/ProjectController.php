<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;
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
            $projects = Project::select(['id', 'name', 'client', 'date', 'category', 'link', 'description']);

            return DataTables::of($projects)
                ->addColumn('action', function ($project) {
                    return '<a href="#" class="text-blue-600 hover:underline edit-btn" data-id="'.$project->id.'">Edit</a> | 
                            <a href="#" class="text-red-600 hover:underline delete-btn" data-id="'.$project->id.'">Delete</a>';
                })
                ->rawColumns(['action'])
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

            if ($request->has('removed_images')) {
                $removedImages = json_decode($request->removed_images, true);
                $request->merge(['removed_images' => is_array($removedImages) ? $removedImages : []]);
            }

            // **Validasi input**
            $request->validate([
                'name' => 'required|string|max:255',
                'client' => 'required|string|max:255',
                'date' => 'required|date',
                'category' => 'required|array',
                'category.*' => 'string|max:255',
                'link' => 'nullable|url',
                'description' => 'required|string',
                'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
                'removed_images' => 'nullable|array', // Menampung gambar yang ingin dihapus
                'removed_images.*' => 'integer'
            ]);

            // **Simpan data ke model**
            $project->name = $request->name;
            $project->client = $request->client;
            $project->date = $request->date;
            $project->category = implode(' ', $request->category);
            $project->link = $request->link;
            $project->description = $request->description;
            $project->save();

            // **Hapus gambar lama jika diperlukan**
            if ($isUpdate && $request->has('removed_images')) {
                $removedImages = $request->removed_images; // Ambil list gambar yang dihapus dari frontend

                foreach ($removedImages as $imageId) {
                    $image = ProjectImage::find($imageId);
                    if ($image) {
                        Storage::disk('public')->delete($image->image_path);
                        $image->delete();
                    }
                }
            }

            // **Upload gambar baru jika ada**
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('projects', $filename, 'public');

                    ProjectImage::create([
                        'project_id' => $project->id,
                        'image_path' => $filePath
                    ]);
                }
            }

            return response()->json([
                'message' => $isUpdate ? 'Project updated successfully!' : 'Project added successfully!',
                'data' => $project->load('images') // Load gambar juga
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }


    public function getProject($id)
    {
        $project = Project::with('images')->find($id); // Ambil project beserta gambar-gambarnya

        if (!$project) {
            return response()->json(['success' => false, 'message' => 'Project not found']);
        }

        // Ambil semua gambar dari tabel `project_images`
        $images = [];
        foreach ($project->images as $image) {
            $images[] = [
                'id' => $image->id,
                'url' => asset('storage/' . ltrim($image->image_path, '/')),
                'name' => basename($image->image_path)
            ];
        }

        return response()->json([
            'success' => true,
            'project' => [
                'id' => $project->id,
                'name' => $project->name,
                'client' => $project->client,
                'date' => $project->date,
                'category' => $project->category,
                'link' => $project->link,
                'description' => $project->description,
                'images' => $images // Mengembalikan daftar gambar
            ]
        ]);
    }


    public function deleteData($id)
    {
        try {
            $project = Project::find($id);
    
            if (!$project) {
                return response()->json(['message' => 'Project not found.'], 404);
            }
    
            $images = ProjectImage::where('project_id', $project->id)->get();
    
            foreach ($images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
    
            $project->delete();
    
            return response()->json(['message' => 'Project deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    public function detailProject($id)
    {
        $project = Project::with('images')->findOrFail($id);
        return view('detail-project', compact('project'));
    }


}
