<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'card_id', 'user_id', 'school_id', 'car_id','gender', 'first_name', 'last_name', 'fullname_s', 'nickname','relationship', 'mobile', 'address', 'lattitude', 'longtitude', 'price', 'image_stu', 'status'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
