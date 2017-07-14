<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public static function createByProvider($providerUser)
    {
        return self::create([
            'email' => $providerUser->getEmail(),
            'name'  => $providerUser->getName(),
        ]);
    }

    public function userData()
    {
        return $this->belongsTo(UserData::class);
    }
}
