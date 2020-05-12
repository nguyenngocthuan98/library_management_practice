<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Follow;
use App\Models\Rate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ADMIN = 1;
    const USER = 0;

    const FEMALE = 1;
    const MALE = 2;
    const UNKNOW = 0;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'birth',
        'address',
        'gender',
        'phone',
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

    //Relationship
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_user');
    }

    public function follows()
    {
        return $this->hasMany(Follow::class, 'id_user');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_user');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'id_user');
    }
}
