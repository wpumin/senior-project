<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_in extends Model
{
    protected $table = 'check_in';
    protected $fillable = [
        'card_id', 'time_check','date_check','get_on_id', 'period_time', 'filter'
    ];

    protected $guarded = ['id'];
    // protected $dates = ['created_at', 'updated_at'];
}
