<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marks';
    protected $fillable = [
        'student_id', 
        'date_am_1', 
        'date_am_2',
        'date_pm_1', 
        'date_pm_2', 

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
