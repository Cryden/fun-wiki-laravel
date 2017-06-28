<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        return User::create([
            'email' => $providerUser->getEmail(),
            'name'  => $providerUser->getName(),
        ]);
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
    
}
