<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;
use App\Models\Arttag;

class ShowController extends Controller
{
    public function __invoke(Arttag $arttag){
        return view('admin.arttag.show', compact('arttag'));
    }
}
