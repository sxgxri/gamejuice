<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleArttag extends Model
{
    use HasFactory;

    protected $table = 'article_arttags';
    protected $guarded = false;
}
