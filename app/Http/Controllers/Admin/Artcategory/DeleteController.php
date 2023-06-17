<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Artcategory\UpdateRequest;
use App\Models\Artcategory;

class DeleteController extends Controller
{
    public function __invoke(Artcategory $artcategory){
        $artcategory->delete();
        return redirect()->route('admin.artcategory.index');
    }
}
