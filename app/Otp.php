<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'otp';
    protected $fillable = [
        'id', 'email', 'otp', 'ref'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $dates = ['created_at	', 'updated_at'];
}
