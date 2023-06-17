<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post){
        $date = Carbon::parse($post->created_at);
        return view('post.show', compact('post', 'date'));
    }
}
