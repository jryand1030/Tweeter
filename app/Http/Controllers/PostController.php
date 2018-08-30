<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Post;
use Auth;
use \User;
use \profile;
use \DB;
use App\Like;


class PostController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::select('posts.*')
            ->leftJoin('followers','posts.user_id', '=','followers.followee_id')
            ->where('followers.user_id', auth()->id())
            ->orWhere('posts.user_id','=',auth()->id())
            ->get();


            // "SELECT posts.* FROM posts JOIN followers ON posts.user_id = followers.followee_id WHERE followers.user_id = auth()->()";


        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['user_id'] = auth()->id();
        $data['title'] = request('title');
        $data['body'] = request('body');

        $post = Post::create($data);

        return redirect('/posts/' .$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
            if(Auth::id() == $post->user_id) {
        
                return view('posts.edit', compact('post'));
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        
        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts/' .$id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::destroy($id);

        return redirect('/posts/');
    }
    
    public function like($id) {
       

        //return redirect()->back();
    
        $duplicate=DB::table('likes')
        ->where([
            ['user_id','=',auth()->id()],
            ['post_id','=',$id]
        ])
        ->count();

        if($duplicate) {
            //return redirect()->back();
            // or delete this record

            return redirect()->back();
        }

        // add the new record to the db
        $like = Like::create([
            'user_id'=>auth()->id(),
            'post_id'=>$id
        ]);

        return redirect()->back();

    }
}
