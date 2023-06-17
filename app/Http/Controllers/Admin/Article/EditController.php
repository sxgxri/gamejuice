<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\StoreRequest;
use App\Models\Artcategory;
use App\Models\Article;
use App\Models\Arttag;

class EditController extends BaseController
{
    public function __invoke(Article $article){

        $artcategories = Artcategory::all();
        $arttags = Arttag::all();

        return view('admin.article.edit', compact('article', 'artcategories', 'arttags'));
    }
}
