<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function car()
    {
    	return $this->belongsTo(Car::class);
    }
}
