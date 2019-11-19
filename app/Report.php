<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = [
        'user_id', 'type_id', 'title', 'content'

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
