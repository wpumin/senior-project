<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'role_id', 'relationship_id', 'car_id', 'image', 'prefix', 'first_name', 'last_name', 'fullname_u', 'phone', 'line_id', 'email', 'address', 'datetime', 'username', 'token'
            

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at', 'last_login_date'];
    protected $hidden = ['password'];
}
