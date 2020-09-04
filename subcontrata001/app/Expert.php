<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    //

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function membersihp()
    {
        return $this->hasOne('App\Membership');
    }
}
