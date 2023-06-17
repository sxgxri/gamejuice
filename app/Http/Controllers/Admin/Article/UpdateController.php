<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\UpdateRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Article $article){
        $data = $request->validated(); //ОБРАБОТКА ЗАПРОСА
        $article = $this->service->update($data, $article); //ВЗАИМОДЕЙСТВИЕ С БАЗОЙ

        return view('admin.article.show', compact('article')); //ПЕРЕДАЧА ОТВЕТА
    }
}
