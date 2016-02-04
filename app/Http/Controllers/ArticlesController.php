<?php

namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function  index()
    {

        $articles = Article::latest('published_at')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);


        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());

        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public  function  edit($id)
    {
        $article = Article::find($id);


        return view('articles.edit', compact('article'));
    }
    public function  update($id, ArticleRequest $request)
    {
        $article = Article::find($id);

        $article->update($request->all());

        return redirect('articles');
    }


    /*public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date'
        ]);
        Article::create($request->all());

        return redirect('articles');
    }*/
}
