<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artcategory;

class ShowController extends Controller
{
    public function __invoke(Artcategory $artcategory){
        return view('admin.artcategory.show', compact('artcategory'));
    }
}
