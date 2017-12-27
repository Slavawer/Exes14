<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function points()
    {
        return $this->hasMany(Point::class);
    }
}