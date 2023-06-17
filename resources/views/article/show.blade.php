@extends('layouts.main')
@section('content')
<div class="main-container">
    <div class="name_text justify-content-center">
        <h3>{{ $article->title }}</h3>
        <a style="font-size: 1vw; color: gray;">{{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }}, {{ $date->format('H:i') }}</a>
    </div>
                <div class="post_image">
                    <img src="{{ url('storage/' . $article->main_image) }}" alt="preview_image">
                </div>
                <div class="post_content">
                    <a>{!! $article->content !!} </a>
                </div>
</div>
@endsection
