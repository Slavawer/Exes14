<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    public function member()
    {
        return $this->hasMany(member::class, 'members_id', 'id');
    }
}