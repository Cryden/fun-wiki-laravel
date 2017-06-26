<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

	protected $table = 'user_data';

    protected $fillable = ['user_id', 'user_slug', 'user_name', 'user_photo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
