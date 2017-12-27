<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    public $timestamps = false;

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}