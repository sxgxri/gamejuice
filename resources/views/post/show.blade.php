@extends('layouts.main')
@section('content')
<div class="main-container">
    <div class="name_text">
        <h3>{{ $post->title }}</h3>
        <a style="font-size: 1vw; color: gray;">{{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }}, {{ $date->format('H:i') }}</a>
    </div>
                <div class="post_image">
                    <img src="{{ url('storage/' . $post->main_image) }}" alt="preview_image">
                </div>
    <div class="like">
        <form action="{{ route('post.like.store', $post->id) }}" method="post">
            @csrf
            <button type="submit">
                @auth()
                    @if(auth()->user()->likedPosts->contains($post->id))
                        <img src="{{ asset('images/likeon.png')}}">
                        @else
                        <img src="{{ asset('images/like.png')}}">
                        @endif
                @endauth
            </button>
        </form>
    </div>
                <div class="post_content">
                    <a>{!! $post->content !!}</a>
                </div>
                <div class="comments">
                    <a>Комментарии:</a>
                </div>
                @foreach($post->comments as $comment)
                    <div class="comment_block">
                       <div class="comment_name">
                           <a>Пользователь <a style="color: rgba(54,176,17,0.85);">{{ $comment->user->name }}</a>: </a>
                       </div>
                        <div class="comment_text">
                            <a>{{ $comment->message }}</a>
                        </div>
                        <div class="comment_time">
                            <a>{{ $comment->dateAsCarbon->diffForHumans() }}</a>
                        </div>
                    </div>
                @endforeach
                @auth()
                    <div class="comments_form">
                        <a>Оставить комментарий</a>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <textarea name="message" id="comment" cols="30"  class="form-control" placeholder="Комментарий"></textarea>
                            <div class="submit_comment">
                                <input type="submit" value="Отправить">
                            </div>
                        </form>
                    </div>
                @endauth

</div>
@endsection
