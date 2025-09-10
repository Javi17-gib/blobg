<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];
}
