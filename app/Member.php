<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    public function Direction()
    {
        return $this->hasMany(Direction::class, 'id', 'direction_id');
    }

    public function Point()
    {
        return $this->hasMany(Point::class, 'members_id', 'id');
    }
}