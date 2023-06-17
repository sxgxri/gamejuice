<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ShowController extends BaseController
{
    public function __invoke(Article $article){
        return view('admin.article.show', compact('article'));
    }
}
