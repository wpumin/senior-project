<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_report extends Model
{
    protected $table = 'type_reports';
    protected $fillable = [
        'name'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
