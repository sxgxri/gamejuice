<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $articles = Article::paginate();
        $randomArticles = Article::get()->random(8);
        return view('article.index', compact('articles' , 'randomArticles'));
    }
}
