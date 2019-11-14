<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News_status extends Model
{
   
    protected $table = 'news_statuses';
    protected $fillable = [
        'name'
    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
