@extends('layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followers.css') }}" >
<a href="/posts">Home</a>
<h1 class="text-center" >People I might like</h1>
    @foreach( $users as $user )
    <div class="container">
<section id="team" class="pb-5">
    
        <h5 class="section-title h1"></h5>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                   
                                    <h1>{{ $user->name }}</h1>
                                    <h4 class="card-title">Favorite Food:</h4>
                                        <p>{{ $user->profile->favorite_food }}</p>
                                    <p class="card-text">Birth Day: {{ $user->profile->birth_date }}.</p>
                                    <a href="#" class="btn btn-primary btn-sm">Click for more info</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">What's interesting about {{ $user->name }}</h4>
                                    <p class="card-text">{{ $user->profile->bio }}</p>
                                    <a href="/follow/{{$user->id}}">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</section>
@endforeach
</body>
</html>