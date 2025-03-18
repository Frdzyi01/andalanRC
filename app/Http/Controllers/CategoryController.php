<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin/category');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::select(['id', 'name', 'slug']);

            return DataTables::of($categories)
                ->make(true);
        }

        return response()->json(['message' => 'Invalid request'], 400);
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'required|string|max:255|unique:categories,slug'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        return response()->json(['message' => 'Category added successfully!']);
    }

    public function listData(){
        $categories = Category::select('name', 'slug')->get();
        return response()->json($categories);
    }
}
