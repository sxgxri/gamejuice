<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artcategory;

class IndexController extends Controller
{
    public function __invoke(){
        $artcategories = Artcategory::all();
        return view('admin.artcategory.index', compact('artcategories'));
    }
}
