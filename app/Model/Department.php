<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function doctors()
    {
        return $this->hasMany(Doctors::class);
    }
}
