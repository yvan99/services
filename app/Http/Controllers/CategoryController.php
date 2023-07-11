<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cell;
use App\Models\Sector;

class CategoryController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $categories = Category::withCount('services')->get();

        return view('welcome', compact('totalCategories', 'categories'));
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
