<?php

namespace App;
Use \App\ User;
use \App\ Post;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =['user_id','name','bio','favorite_food','country','birth_date'];

    public function addprofile($profile) {

        $this->profile()->create([
            'user_id'=> $profile['user_id'],
            'name'=> $profile['name'],
            'bio'=>$profile['bio'],
            'favorite_food'=>$profile['favorite_food'],
            'country'=>$profile['country'],
            'birthdate'=>$profile['birth_date']
        ]);
        
    }

    public function user() {

        return $this->belongsTo(User::class);
    }

 

}
