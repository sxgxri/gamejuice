<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Artcategory\UpdateRequest;
use App\Models\Artcategory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Artcategory $artcategory){
        $data = $request->validated();
        $artcategory->update($data);
        return view('admin.artcategory.show', compact('artcategory'));
    }
}
