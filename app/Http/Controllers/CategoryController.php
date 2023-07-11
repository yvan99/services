<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $services = $category->services()->get();

        return view('category.show', compact('category', 'services'));
    }
}
