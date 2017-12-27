<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    public function Member()
    {
        return $this->hasMany(Member::class, 'members_id', 'id');
    }
}