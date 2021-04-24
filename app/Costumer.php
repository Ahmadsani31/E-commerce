<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Costumer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'costumer';

    protected $table = 'costumers';

    protected $fillable = [
        'name', 'email', 'password','username','birthday','avatar','nope',
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

    public function getAuthPassword()
    {
      return $this->password;
    }
}
