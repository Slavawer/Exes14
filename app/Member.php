<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    public function point()
    {
        return $this->hasMany(point::class, 'members_id', 'id');
    }
}