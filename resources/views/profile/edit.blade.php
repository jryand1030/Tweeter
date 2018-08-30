@extends('layouts')

		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <form class="form-horizontal" method="post" action="/profile">
                                <input type="hidden" name="_method" value="PUT">
                                                    {{ csrf_field() }}

                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"> Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="Name" class="form-control here" type="text" value="{{ $user->name }}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Favorite Food</label> 
                                <div class="col-8">
                                  <input id="lastname" name="favorite_food" placeholder="Favorite food" class="form-control here" type="text" value="{{ $user->profile->favorite_food }}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Birth Date</label> 
                                <div class="col-8">
                                  <input id="text" name="birth_date" placeholder="Birth Date" class="form-control here" value="{{ $user->profile->birth_date }}">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Country</label> 
                                <div class="col-8">
                                  <input id="text" name="country" placeholder="Country" class="form-control here" value="{{ $user->profile->Country}}">
                                </div>
                              </div>
                        
                           
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Bio</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="bio" cols="40" rows="4" class="form-control">{{ $user->profile->bio }}</textarea>
                                </div>
                              </div>
                            
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>