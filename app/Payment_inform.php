<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_inform extends Model
{
    protected $table = 'payment_informs';
    protected $fillable = [
        'payment_log_id', 'user_id', 'time', 'date', 'content', 'bill_image'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
