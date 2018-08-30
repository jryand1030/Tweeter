<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profile;
use \App\User;
use \App\Post;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $post=Post::find()->user()->id;

            $user=User::find(auth()->user()->id);

            return view('profile.index', compact('user'));
        }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
       
        if(is_null($id)) $id = auth()->user()->id;

        $user = User::find($id);

        return view('profile.show', compact('user'));
 

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
{
        $user=auth()->user();
    
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profile=Profile::where('user_id', auth()->user()->id)->first();

        $profile->user->name = request('name');
        $profile->user->save();

        $profile->favorite_food = request('favorite_food');
        $profile->bio = request('bio');
        $profile->birth_date = request('birth_date');
        $profile->country = request('country');

        $profile->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}





// $user->name;

// $tweet->user->name;
// $comment->user->name;
// $user->tweets;
// $user->comments
// $comment->tweet->user->name;


// $users = User::get();
// foreach($users as $user){
//     $user->name;
//     $user->comments
// }


// $followees = Follower::findMany('user_id', auth()->id());
// // collection of followers, with their ID's

// $tweets = Tweet::whereIn('user_id', [1,2,3,4,5])