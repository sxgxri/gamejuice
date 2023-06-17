<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends BaseController
{
    public function __invoke(){
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }
}
