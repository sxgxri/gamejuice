<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Artcategory;
use App\Models\Article;
use App\Models\Arttag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $data = [];
        $data['categoriesCount'] = Category::all()->count();
        $data['tagsCount'] = Tag::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['artcategoriesCount'] = Artcategory::all()->count();
        $data['arttagsCount'] = Arttag::all()->count();
        $data['articlesCount'] = Article::all()->count();
        $data['usersCount'] = User::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
