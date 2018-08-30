@extends('layouts')
@include('partials.errors')
<div class="text-right">
<a class="text-right" href="/logout">Logout</a>
</div>
@include('partials.nav')
<div class="jumbotron">
   
    <div class="container">

        <h1 class="text-center"> Welcome to Twitter {{ Auth::user()->name }} </h1>
        <p class="text-center"> Hear all the latest gossip that people are saying and stir the pot with your own explosive comments!</p>
        <a href="/posts/create" class="btn btn-primary">Make a new Tweet</a>
    </div>
</div>        


<div class="container-fluid">
<div class="row">
@foreach($posts as $post)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="text-left"><a href="/profile/{{ $post->user->id }}"> {{ $post->user->name }} </a><br>
        {{ $post->created_at->diffForHumans() }}
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->body }}</p>
        <a href="/posts/{{ $post->id }}/like">Likes:</a> {{ count($post->likes) }}
        
          <!-- edit only visible for user -->
        @if(Auth::id() == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
        @endif
        <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#commentmodal{{ $post->id }}">Comments</button>
        
                                        <!-- Comments Modal -->
          <div class="modal fade" id="commentmodal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Comments</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  @foreach ($post->comments as $comment)
                  <div class="card">
                      <div class="card-body">
                        <p class="text-center"> {{ $comment->user->name }} <br>
                        {{ $comment->created_at->diffForHumans() }}
                        <h5 class="card-title">{{ $comment->body }}</h5>
                       
                        <p class="card-text"></p>
                      </div>
                    </div>
                  @endforeach  
                    <form class="form-horizontal" role="form" method="post"  action="/posts/{{$post->id}}/comments">
                                        {{ csrf_field() }}
                    <textarea class="form-control" name="body" rows='3' id='comment'></textarea>
                    
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Comment</button>
                  </form>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
          </div>                
      </div>
    </div>
  </div>    
@endforeach
    </div>
  </div>





  

  
  

  
  
  
  