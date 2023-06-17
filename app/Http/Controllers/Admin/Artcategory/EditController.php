<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Artcategory\StoreRequest;
use App\Models\Artcategory;

class EditController extends Controller
{
    public function __invoke(Artcategory $artcategory){
        return view('admin.artcategory.edit', compact('artcategory'));
    }
}
