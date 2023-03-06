<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function routing(string $page)
    {
        return view('admin/' . $page);
    }

    public function index()
    {
        return View('index', ['articles' => Article::paginate(10)]);
    }


    public function store(Request $request)
    {
        //store a new post
    }
    public function show(Article $article)
    {
        return view('show', ['article' => $article]);
    }
}
