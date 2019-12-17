<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_log extends Model
{
    protected $table = 'payment_logs';
    protected $fillable = [
        'tran_key', 'month', 'year', 'status_id', 'pm_status_id', 'qr_code','qr_code2', 'created_at', 'updated_at'


    ];

    protected $guarded = ['id'];
}
