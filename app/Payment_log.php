<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_log extends Model
{
    protected $table = 'payment_logs';
    protected $fillable = [
        'tran_key', 'month', 'year', 'user_id', 'status_id', 'car_id', 'price', 'qr_code', 'bank_id', 'created_at'


    ];

    protected $guarded = ['id'];
    // protected $dates = ['created_at', 'updated_at'];
}
