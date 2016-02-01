<?php

namespace App\Http\Controllers;

use App\Article;
use Request;
use Carbon\Carbon;

use App\Http\Requests;
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

    public function store()
    {
        $input = Request::all();
        $input['published_at'] = Carbon::now();

        Article::create($input);

        //$article = new Article;
        //$article->title = $input['title'];


        return redirect('articles');
    }
}
