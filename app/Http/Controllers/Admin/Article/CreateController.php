<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Artcategory;
use App\Models\Arttag;

class CreateController extends BaseController
{
    public function __invoke(){
        $artcategories = artcategory::all();
        $arttags = Arttag::all();
        return view('admin.article.create', compact('artcategories', 'arttags'));
    }
}
