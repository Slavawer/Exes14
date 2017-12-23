<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{

    public function Direction()
    {
        return $this->hasMany(Direction::class, 'direction_id');
    }
}