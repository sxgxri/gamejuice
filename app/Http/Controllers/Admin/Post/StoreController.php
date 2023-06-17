<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated(); //ОБРАБОТКА ЗАПРОСА
        $this->service->store($data); //ВЗАИМОДЕЙСТВИЕ С БАЗОЙ

        return redirect()->route('admin.post.index');
    }
}