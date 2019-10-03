<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_status extends Model
{
    protected $table = 'payment_statuses';
    protected $fillable = [
        'name'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
