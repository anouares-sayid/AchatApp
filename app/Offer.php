<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
   

    public function companie()
    {
        return $this->belongsTo('App\Companies');
    }
}
