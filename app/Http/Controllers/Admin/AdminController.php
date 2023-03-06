<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $article_count = Article::count();
        return view('admin.index', ['article_count' => $article_count]);
    }
    
}
