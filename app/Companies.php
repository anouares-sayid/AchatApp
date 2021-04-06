<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Companies extends Authenticatable implements MustVerifyEmail
{







    use Notifiable;
    protected $guard = 'Company';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    
    public function portfolio()
    {
        return $this->hasOne('App\Portfolios');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
    
    public function tinders()
    {
        return $this->hasMany('App\Tinders');
    }
}
