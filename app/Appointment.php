<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'user_id',
        'student_id', 
        'app_status_id', 
        'period_time_id',
        'appointment_at', 
        'content', 

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
