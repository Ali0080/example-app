<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return Category::all();
    }

    public function getArticleByCategory(Request $request)
    {
        return view('category.index')->with('categories', Article::categories());
    }
}
