<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = [
        'code'


    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function student()
    {
        $this->belongsTo('App\Student');
    }
}
