<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';


    protected $fillable = [
        'filename', 'mime', 'original_filename', 'user_id'
    ];

    protected $hidden = [
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
