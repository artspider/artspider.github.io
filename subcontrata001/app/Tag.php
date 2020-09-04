<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function experts()
    {
        return $this->belongsToMany('App\Expert')->withTimestamps();
    }
}
