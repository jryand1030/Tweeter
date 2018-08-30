<?php

namespace App;
use\App\Comment;
use \App\Follower;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'user_id','title','body' ];

    public function comments() {
         
        return $this->hasMany(Comment::class);
    }

    public function user() {
        
        return $this->belongsTo(User::class);
    }

    public function addComment($comment) {
        $this->comments()->create([
            'body'  =>  $comment['body'],
            'user_id'   =>  $comment['user_id']
        ]);
    }

    public function following() {

        return $this->hasMany(User::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
