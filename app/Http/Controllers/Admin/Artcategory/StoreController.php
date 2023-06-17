<?php

namespace App\Http\Controllers\Admin\Artcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Artcategory\StoreRequest;
use App\Models\Artcategory;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        Artcategory::firstOrCreate($data);
        return redirect()->route('admin.artcategory.index');
    }
}
