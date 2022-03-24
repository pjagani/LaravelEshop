<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Category';
        $categoryList=Category::all();
        return view('admin.category.index', [
            'title' => $title,
            'categoryList' => $categoryList,
        ]);
        return view('admin.category.index');
    }
}
