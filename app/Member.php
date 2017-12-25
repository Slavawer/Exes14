<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    public function direction()
    {
        return $this->hasMany(direction::class, 'direction_id', 'id');
    }
}