<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Std_status extends Model
{
    protected $table = 'std_statuses';
    protected $fillable = [
        'name'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
