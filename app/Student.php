<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'user_id',
        'std_status_id',
        'school_id',
        'car_id',
        'district_id',
        'card_id',
        'prefix', 
        'first_name',
        'last_name', 
        'nickname',
        'phone', 
        // 'lattitude', 
        // 'longtitude', 
        'image' 
    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
