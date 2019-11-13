<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'image', 
        'role_id',
        'relationship_id',
        'car_id',
        'prefix',
        'first_name', 
        'last_name', 
        'phone', 
        'line_id', 
        'email', 
        'address', 
        'username', 
        'token', 


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at', 'last_login_date'];
    protected $hidden = ['password'];

    public function relationship()
    {
        return $this->belongsTo('App\Relationship');
    }

}
