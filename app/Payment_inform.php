<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_inform extends Model
{
    protected $table = 'payment_informs';
    protected $fillable = [
        'tran_key', 'user_id', 'time', 'date', 'content', 'bill_image'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function payment_log()
    {
        return $this->hasMany('App\Payment_log');
    }
}
