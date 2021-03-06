@extends('app')

<div class="container">

@section('content')
    <h1>Articles</h1>
    <a href="/articles/create">Create Article</a>

    <hr>

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="/articles/{{$article->id}}"> {{$article->title}}</a>
            </h2>

            <div class="body">{{$article->body}}</div>
        </article>
    @endforeach
@stop
</div>