<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Summary of CategoryController
 */
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

    /**
     * Summary of show
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function show(Request $request, Category $category)
    {
        return view('category')->with('articles', $category->articles);
    }
}
