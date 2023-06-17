<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artcategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'artcategories';
    protected $guarded = false;
}
