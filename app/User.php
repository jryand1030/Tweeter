<?php

namespace App;
use App\Post;
use App\Comment;
use App\Auth;


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
        'name', 'email', 'password','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {

        return $this->hasMany(Post::class);

    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function following() {

        return $this->hasMany(Follower::class);

    }

  

    public function profile() {

        return $this->hasOne(Profile::class);
    }

public function likes() {

    return $this->hasMany('App\Like');
    
    }
}