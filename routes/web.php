<?php

use App\Comment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


                    // route to return to homepage
Route::get('/', function () {
    return view('welcome');
});

                         //REGISTRATION
           // direct user to registration page //
Route::get('/auth/registration', 'RegisterController@create');
            //register new users
Route::post('registration', 'RegisterController@store');

                        //LOGIN/SESSION START//
                // login/session authentication //
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login','SessionsController@store')->name('login');
Route::get('/logout','SessionsController@destroy');


                     //resource route to handle REST functions with crud
Route::resource('posts', 'PostController');

                        //route for comments functionality
Route::post('posts/{post}/comments', 'commentController@store');
                    
                        // followers routing
Route::get('follow/{user}','followersController@store');
Route::get('/followers/followingme', 'followersController@followingme');
Route::get('/followers/following','followersController@following'); 
Route::get('/followers/listusers', 'followersController@listusers');
Route::get('/followers/iamfollowing', 'followersController@iamfollowing');
Route::delete('follow/{user}', 'followersController@destroy');


                        //profile crud controller
Route::get('/profile/edit', 'profileController@edit');
Route::get('/profile', 'profileController@show');
Route::get('/profile/{profile}', 'profileController@show');
Route::put('/profile', 'profileController@update');
Route::get('/posts/{post}/like', 'PostController@like');