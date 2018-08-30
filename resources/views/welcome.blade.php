@extends('layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}" >

    <div class="container">
        <div class="row">
            <video src="images/welcome.mov" autoplay loop></video>
        </div
             <section class="login">
                 <div class="title">
                    <h1 class="text-center"> Welcome to Your World </h1>
                </div>    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 offset-lg-3 mt-5">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="glyphicon glyphicon-lock"></span> Login</div>
                            <div class="card-body">
                        
                                <form method="POST" action="/login" class="form-horizontal" role="form">
                                                    @csrf
                                    <div class="form-group row">
                                        <label for ="name" class="col-lg-4 col-xs-12">
                                            Name
                                        </label>
                                        <div class="col-lg-8 col-xs-12">
                                            <input type="name" class="form-control" id="name" placeholder="name" required>
                                        </div>
                                    </div>        
                                
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-lg-4 col-xs-12">
                                            Email</label>
                                        <div class="col-lg-8 col-xs-12">
                                            <input type="email" name="email"class="form-control" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-lg-4 col-xs-12">
                                            Password</label>
                                        <div class="col-lg-8 col-xs-12">
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>

                      
                                    <div class="form-group row last">
                                        <div class="offset-lg-3 col-lg-9 col-xs-12">
                                            <button type="submit" class="btn btn-default btn-md">
                                                Sign in</button>
                                            <button type="reset" class="btn btn-default btn-md">
                                                Reset</button> 
                                                <a href='/auth/registration'>Sign up here</a>
                                                @include('partials.errors')
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card-footer">
                                <p class="text-center">Not Registred? Why the hell not!???<p>
                               
                            </div>
                          
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
           
            </div>  
        </div> 
       
            