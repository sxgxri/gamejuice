<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;
use App\Models\Arttag;

class IndexController extends Controller
{
    public function __invoke(){
        $arttags = Arttag::all();
        return view('admin.arttag.index', compact('arttags'));
    }
}
