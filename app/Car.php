<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'name', 'name_driver' 


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
