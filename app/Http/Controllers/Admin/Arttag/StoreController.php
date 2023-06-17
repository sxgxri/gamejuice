<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Arttag\StoreRequest;
use App\Models\Arttag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        Arttag::firstOrCreate($data);
        return redirect()->route('admin.arttag.index');
    }
}
