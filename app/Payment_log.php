<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_log extends Model
{
    protected $table = 'payment_logs';
    protected $fillable = [
        'month', 'year', 'user_id', 'status_id'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payment_inform()
    {
        return $this->belongsTo('App\Payment_inform');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
