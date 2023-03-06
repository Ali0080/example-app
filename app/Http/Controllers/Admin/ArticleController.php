<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
        return view('admin.article.index')->with('articles', Article::paginate(10));
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit')->with('article', $article);
    }

    public function create()
    {
        return view('admin.article.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $img = Storage::disk('public')->put('/images', $request->file('img'));
        $img2 = Storage::disk('public')->put('/images', $request->file('img2'));

        $article = new Article();
        Article::create([
            'title' => $request['title'],
            'lead' => $request['lead'],
            'story' => $request['story'],
            'category' => $data['category'],
            'img'   => $img
        ]);

        return redirect()->route('admin.article.index');
    }
    public function show($id)
    {
        return view('admin.article.show', ['single_article' => Article::find($id)]);
    }

    public function destroy($id)
    {

        Article::find($id)->delete();
        return redirect()->route('admin.article.index');
    }
    // public function category(){
    //     return view('category')->with('categories', Article::all()->where('categories[category] = '));
    // }
}
