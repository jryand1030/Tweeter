<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Follower;
use DB;
use Auth;

class followersController extends Controller
{
    public function index() {

        return view('followers.followingme');
    }

    public function listusers() {

        $users = User::where('id','!=',Auth::id())->get();

        return view('followers.listusers', compact('users'));
    }


    public function iamfollowing(){

        $followees = DB::table('followers')->select('followee_id')->where('user_id','=', auth()->id())->get();

        $followeeArray = [];
        foreach($followees as $followee){
            $followeeArray[] = $followee->followee_id;
        }


        $users = User::whereIn('id', $followeeArray)->get();

        // return a view, pass it users
        return view('/followers.iamfollowing', compact('users'));

    }

    public function store($id)
    {
        $data['user_id'] = auth()->id();
        $data['followee_id'] = $id;
     

        $follower = Follower::create($data);

        return redirect()->back()->with('message', ['follower has been added']); 
    }

    public function destroy($id) {
        
        $follower = Follower::where([
            ['user_id','=',auth()->id() ],
            ['followee_id','=', $id]
        ])->first();

            $follower->delete();

    return redirect('/followers/iamfollowing');

    }

    public function followingme() {

        $followers = DB::table('followers')->select('user_id')->where('followee_id', '=', auth()->id())->get();

        $followerArray = [];
        foreach($followers as $follower) {
            $followerArray[] = $follower->user_id;
        }


        $users = User::whereIn('id', $followerArray)->get();

        // return a view, pass it users
        return view('/followers.followingme', compact('users'));

    }

}
