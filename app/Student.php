<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'card_id', 'user_id', 'school_id', 'car_id', 'first_name', 'last_name', 'nickname', 'phone', 'lattitude', 'longtitude', 'price', 'image', 'qr_code'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
