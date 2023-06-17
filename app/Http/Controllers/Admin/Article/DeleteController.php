<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\UpdateRequest;
use App\Models\Article;

class DeleteController extends BaseController
{
    public function __invoke(Article $article){
        $article->delete();
        return redirect()->route('admin.article.index');
    }
}
