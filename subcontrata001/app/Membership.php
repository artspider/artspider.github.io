<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    //
    public function expert()
    {
        return $this->belongsTo('App\Expert');
    }
}
