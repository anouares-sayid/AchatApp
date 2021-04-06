<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    public function Tinder()
    {
        return $this->belongsTo('App\Tinders');
    }
}
