<?php

namespace App\Http\Controllers\Admin\Arttag;

use App\Http\Controllers\Controller;
use App\Models\Arttag;

class DeleteController extends Controller
{
    public function __invoke(Arttag $arttag){
        $arttag->delete();
        return redirect()->route('admin.arttag.index');
    }
}
