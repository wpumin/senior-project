<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App_status extends Model
{
    protected $table = 'app_statuses';
    protected $fillable = [
        'app_status_name'
    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
