<?php

namespace App\Service;

use App\Models\Article;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleService
{
    public function store($data)        //ФУНКЦИЯ ДОБАВЛЕНИЯ ДАННЫХ
    {
        try {
            Db::beginTransaction();
            if (isset($data['arttag_ids'])){
                $arttagIds = $data['arttag_ids'];
                unset($data['arttag_ids']);
            }
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $article = Article::firstOrCreate($data);
            if (isset($tagIds)){
                $article->tags()->attach($arttagIds);
            }
            Db::commit();
        } catch (\Exception $exception){
            Db::rollBack();
            abort(500);
        }
    }

    public function update($data, $article)        //ФУНКЦИЯ ОБНОВЛЕНИЯ ДАННЫХ
    {

        try {
            Db::beginTransaction();
            if (isset($data['arttag_ids'])){
                $arttagIds = $data['arttag_ids'];
                unset($data['arttag_ids']);
            }

            if (isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if (isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $article->update($data);
            if (isset($arttagIds)){
                $article->arttags()->sync($arttagIds);
            }
            Db::commit();
        } catch (Exception $exception) {
            Db::rollBack();
            abort(500);
        }

        return $article;
    }
}
