@extends('layouts')
<link href="css/profile" rel="stylesheet" type="text/css">
<div class="container">
 
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{ $user->name }}</h2>
                    <p><strong>About: </strong> {{ $user->name }} </p>
                    <p><strong>Birthdate: </strong> {{ $user->profile->birth_date }} </p>
                    <p><strong>Favorite food: </strong> {{ $user->profile->favorite_food }} </p>
                    <p><strong>Country: </strong> {{ $user->profile->Country }} </p>
                    <p><strong>BIO:</strong> {{ $user->profile->bio }} </p>
          
               </div>      
            </div>
    
        <div>
            <a href="/follow/{{ $user->id }}">Follow</a> <br />
            @if($user->id == Auth::id())
            <a href="/profile/edit">Edit Profile</a> <br>
            @endif
            <a href="/posts/">Home</a>
        </div>
        
        <div class="container">
            <div class="row text-center">
                <div class="col-12 text-center">
                    <h1 class="text-center"> Thoughts from a time in the past</h1>
                </div>
            </div>    
        <div class="card">
        @foreach($user->posts as $post)
            <div class="card-header">
            {{ $post->created_at->diffForHumans() }}
          
            </div>
         
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p> </p>
                <p> {{ $post->title  }}</p>
                <p> {{ $post->body }}</p>    
                </blockquote>
            </div>
            @endforeach

            </div>
</div>          
            
               
                    </div>
                </div>
            </div>
    	 </div>                 
		</div>
	</div>
</div>
