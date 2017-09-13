<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
	protected $table = 'hogars';


    protected $fillable = [
        'name', 'dir', 'comment'
    ];

    protected $hidden = [
        'url', 'loc', 'user_id'
    ];

}
