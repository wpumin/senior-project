<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'username', 'password', 'first_name',
        'last_name', 'relationship', 'address',
        'email', 'phone', 'image'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    // public function bill()
    // {
    //     return $this->belongsTo('App\Bill');
    // }


    // public function room()
    // {
    //     return $this->belongsTo('App\Room');
    // }
}
