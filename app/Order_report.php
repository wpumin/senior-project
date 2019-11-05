<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_report extends Model
{
    protected $table = 'order_reports';
    protected $fillable = [
        'name'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function report()
    {
        return $this->hasMany('App\Report');
    }
}
