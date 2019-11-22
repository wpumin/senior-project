<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_inform extends Model
{
    protected $table = 'payment_informs';
    protected $fillable = [
        'payment_log_id',
         'timepicker', 
         'date', 
         'bank_id',
         'pm_status_id',
         'imgInp',
         'price'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
