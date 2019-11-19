<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'user_id', 
        'news_statuses_id', 
        'role_id',
        'title', 
        'content', 
        'image',
        'release_date',
        'release_time',

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
