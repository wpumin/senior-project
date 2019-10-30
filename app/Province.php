<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name', 'status'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}

