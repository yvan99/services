<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cell;
use App\Models\Sector;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $categories = Category::withCount('services')->get();

        return view('welcome', compact('totalCategories', 'categories'));
    }

    public function registerCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->back()->with('success', 'Category registered successfully!');
    }

    public function viewCategories()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function showServices(Category $category)
    {
        $category->load('services');
        $sectors = Sector::all();
        $cells   = Cell::all();

        return view('category.show', [
            'category' => $category,
            'services' => $category->services,
            'sectors' => $sectors,
            'cells' => $cells
        ]);
    }
}
