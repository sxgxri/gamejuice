<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(){
        return view('admin.arttag.create');
    }
}
