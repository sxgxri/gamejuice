<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Arttag\UpdateRequest;
use App\Models\Arttag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Arttag $arttag){
        $data = $request->validated();
        $arttag->update($data);
        return view('admin.arttag.show', compact('arttag'));
    }
}
