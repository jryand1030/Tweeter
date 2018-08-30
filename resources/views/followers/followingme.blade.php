@extends('layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followers.css') }}" >



@section('content')

    <!-- Team -->
    <a href="/posts">home</a>
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">People Following me</h5>
    </div>
</section>
<section id="team" class="pb-5">
<div class="container">    
        <div class="row">
        @foreach( $users as $user )        
            <div class="col-xs-12 col-md-4">          
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="#" alt="card image"></p>
                                    <h1>{{ $user->name }}</h1>
                                    <h4 class="card-title">Favorite food:{{ $user->profile->favorite_food }}</h4>
                                    <p class="card-text">Birth Day: {{ $user->profile->birth_date }}.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">What's interesting about {{ $user->name }}</h4>
                                    <p class="card-text">{{ $user->profile->bio }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach    
        </div>
    </div>
         
</section>
@endsection

            
