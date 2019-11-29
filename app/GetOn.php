<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetOn extends Model
{
    protected $table = 'get_ons';
    protected $fillable = [
        'name'
    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
