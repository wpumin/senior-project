<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period_time extends Model
{
    protected $table = 'period_times';
    protected $fillable = [
        'name'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
