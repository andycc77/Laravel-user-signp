<?php

namespace App;

use App\Events\UserRegister;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function register(array $attributes)
    {
        $user = static::create($attributes);

        //events
        event(new UserRegister($user));

        return $user;
    }
}
