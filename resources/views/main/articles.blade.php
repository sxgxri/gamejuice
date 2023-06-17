@extends('layouts.main')
@section('content')
    <div class="name_text justify-content-center">
        <h3>Статьи</h3>
    </div>
    <div class="main-container">
        <div class="random_articles">
            <h4>Случайные статьи</h4>
            @foreach($randomArticles as $article)
                <div class="random_block">
                    <div class="random_block_image">
                        <img src="{{ url('storage/' . $article->preview_image) }}" alt="preview_image">
                    </div>
                    <div class="random_block_text">
                        <a href="">{{ $article->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="all_articles">
            <h4>Все статьи</h4>
            @foreach($articles as $article)
                <div class="all_block">
                    <div class="all_block_image">
                        <img src="{{ url('storage/' . $article->preview_image) }}" alt="preview_image">
                    </div>
                    <div class="all_block_text">
                        <a href="">{{ $article->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection
