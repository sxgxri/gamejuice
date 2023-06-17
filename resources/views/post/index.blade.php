@extends('layouts.main')
@section('content')
    <div class="name_text justify-content-center" style="margin-bottom: 10px;">
        <h3>Игры</h3>
    </div>
<div class="main-container">
    <div class="random_posts">
            <h4>Случайные игры</h4>
        @foreach($randomPosts as $post)
            <div class="random_block">
                <div class="random_block_image">
                    <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image">
                </div>
                <div class="random_block_text">
                    <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="popular_posts">
        <h4>Популярные игры</h4>
        @foreach($popularPosts as $post)
            <div class="popular_block">
                <div class="popular_block_image">
                    <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image">
                </div>
                <div class="popular_block_text">
                    <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
