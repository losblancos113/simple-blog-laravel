<?php

namespace app\Http\Controllers;

use app\Article;
use app\Http\Requests\ArticleFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(4);
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }

    public function xxx()
    {
        return view('articles.xxx');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title' => $title,
            'content' => $content
        ]);

        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleFormRequest $request)
    {
//        $id = $request->input('id');
        $article = Article::find($id);
        $article->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('articles.index');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}