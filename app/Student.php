<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'card_id', 'user_id', 'school_id', 'car_id', 'first_name', 'last_name', 'nickname', 'mobile', 'address', 'lattitude', 'longtitude', 'price', 'image'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function card()
    {
        return $this->hasOne('App\Card');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
