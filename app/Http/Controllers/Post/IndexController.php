<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $posts = Post::paginate();
        $randomPosts = Post::get()->random(8);
        $popularPosts = Post::withCount('LikedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(16);
        return view('post.index', compact('posts' , 'randomPosts', 'popularPosts'));
    }
}
