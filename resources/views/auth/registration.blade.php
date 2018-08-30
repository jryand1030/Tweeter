@extends('layouts')

  <h1 class="text-center"> Sign up below </h2>
        <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 offset-lg-3 mt-5">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="glyphicon glyphicon-lock"></span> Login</div>
                    <div class="card-body">
                        <form method="POST" action="/registration" class="form-horizontal" role="form">
                                       @csrf
                            <div class="form-group row">
                                <label for ="name" class="col-lg-4 col-xs-12"> Name</label>                             
                                <div class="col-lg-8 col-xs-12">
                                    <input name="name" type="name" class="form-control" id="name" placeholder="name" required>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-lg-4 col-xs-12">Email</label>
                        <div class="col-lg-8 col-xs-12">
                                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                        </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-lg-4 col-xs-12">Password</label>
                                <div class="col-lg-8 col-xs-12">
                                    <input name= "password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                </div>
                            </div>    
                                
                                <div class="form-group row">
                                <label for="confirmpassword" class="col-lg-4 col-xs-12"> Password</label>
                                <div class="col-lg-8 col-xs-12">
                                    <input name="password" type="password"  class="form-control" id="password_confirmation" placeholder="Comfirm Password" required>
                                </div>
                                </div>

                           
                            <div class="form-group row">
                            </div>
                            <div class="form-group row last">
                                <div class="offset-lg-3 col-lg-9 col-xs-12">
                                    <button type="submit" class="btn btn-success btn-md">
                                        Sign up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>