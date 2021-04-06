<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    public function companie()
    {
        return $this->belongsTo('App\Companies');
    }
}
