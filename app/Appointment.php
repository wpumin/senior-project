<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'user_id', 'period_time_id', 'date', 'content', 'student_id', 'date'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
