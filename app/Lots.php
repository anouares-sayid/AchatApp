<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lots extends Model
{
    public function elements()
    {
        return $this->hasMany('App\Elements');

    }
    public function tinder()
    {
        
        return $this->belongsTo('App\Tinders');

    }
}
