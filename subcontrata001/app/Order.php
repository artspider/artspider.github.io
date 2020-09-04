<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function expert()
    {
        return $this->belongsTo('App\Expert');
    }

    public function employer()
    {
        return $this->belongsTo('App\Employer');
    }
}
