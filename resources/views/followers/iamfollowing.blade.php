@extends('layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followers.css') }}" >
<a href="/posts">Home</a>
  


<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">People I Am Following</h5>
    </div>
</section>    
   
<div class="container">
    <section id="team" class="pb-5">        
        <div class="row">
        @foreach( $users as $user )
            <div class="col-xs-12 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                            
                                    <h1>{{ $user->name }}</h1>
                                    <h4 class="card-title">Favorite food</h4>
                                        <p>{{ $user->profile->favorite_food }}</p>
                                    <p class="card-text"> {{ $user->profile->birth_date }}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Flip for more info</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">What's interesting about {{ $user->name }}</h4>
                                    <p class="card-text">{{ $user->profile->bio }}</p>
                                        <form class="form-horizontal" role="form" method="post" action="/follow/{{ $user }}"/>
                                    <input type="hidden" name="_method" value="delete"/>
                                        {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Unfollow</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>          




