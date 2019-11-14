<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'name', 'status','price','qr_code'
    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
