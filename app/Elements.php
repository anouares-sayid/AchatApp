<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elements extends Model
{
    public function lot()
    {
        return $this->belongsTo('App\Lots');
    }
}
