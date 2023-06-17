@extends('layouts.main')
@section('content')
    <div class="name_text justify-content-center" style="margin-bottom: 10px;">
        <h3>Статьи</h3>
    </div>
<div class="main-container">
    <div class="random_posts">
            <h4>Случайные статьи</h4>
        @foreach($randomArticles as $article)
            <div class="random_block">
                <div class="random_block_image">
                    <img src="{{ url('storage/' . $article->preview_image) }}" alt="preview_image">
                </div>
                <div class="random_block_text">
                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="popular_posts">
        <h4>Все статьи</h4>
        @foreach($articles as $article)
            <div class="popular_block">
                <div class="popular_block_image">
                    <img src="{{ url('storage/' . $article->preview_image) }}" alt="preview_image">
                </div>
                <div class="popular_block_text">
                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
