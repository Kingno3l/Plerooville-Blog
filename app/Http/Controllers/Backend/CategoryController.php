<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('backend.category.all_categories', compact('categories'));
    }
}
