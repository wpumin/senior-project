<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'image', 'first_name', 'last_name', 'relationship', 'mobile', 'line_id', 'email', 'address', 'username', 'token', 'car_id'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at', 'last_login_date'];
    protected $hidden = ['password'];
}
