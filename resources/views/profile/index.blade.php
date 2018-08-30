@extends('layouts')
<link href="css/profile" rel="stylesheet" type="text/css">
<div class="container">
 
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{ $user->profile->name }}</h2>
                    <p><strong>About: </strong> {{ $user->profile->name }} </p>
                    <p><strong>Birthdate: </strong> {{ $user->profile->birth_date }} </p>
                    <p><strong>Favorite food: </strong> {{ $user->profile->favorite_food }} </p>
                    <p><strong>Country: </strong> {{ $user->profile->Country }} </p>
                    <h2 class="text-right">BIO: {{ $user->profile->bio }}</p>               
                </div>                          
                    <a href="edit">Edit Profile</a> <br>
                    <a href="/posts/">Home</a>
                </div>                
                <div class="card">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
            </div>
    	 </div>                 
		</div>
	</div>
</div>
