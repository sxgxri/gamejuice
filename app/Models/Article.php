<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles';
    protected $guarded = false;

    public function arttags()
    {
        return $this->belongsToMany(Tag::class, 'article_arttags', 'article_id', 'arttag_id');
    }
}
