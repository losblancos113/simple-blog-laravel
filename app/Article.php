<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'content'
    ];
}
