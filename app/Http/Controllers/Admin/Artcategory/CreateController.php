<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){
        return view('admin.artcategory.create');
    }
}
