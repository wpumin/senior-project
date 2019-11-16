<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $table = 'image_uploads';
    protected $fillable = [
        'filename'

    ];

    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];
}
