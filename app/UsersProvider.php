<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProvider extends Model
{
    protected $table = 'users_providers';

    protected $fillable = ['user_id', 'provider', 'provider_id', 'remember_token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
