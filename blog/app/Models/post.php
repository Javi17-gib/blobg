<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "post";
    protected $fillable = [
        'title',
        'description',
        'img',
        'content',
        'like',
        'slug',
        'user_id',
        'category_id'
    ];
}
