<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_inform extends Model
{
    protected $table = 'payment_informs';
    protected $fillable = [
        'tran_key', 'student_id', 'timepicker', 'date', 'content', 'bill_image', 'bank_id', 'pm_status_id'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
