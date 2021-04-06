<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinders extends Model
{
    public function critereas()
    {
        return $this->hasMany('App\Critereas');
    }
    public function lots()
    {
        return $this->hasMany('App\Lots');
    }

    public function companie()
    {
        return $this->belongsTo('App\Companies');
    }
}