<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//this grabs the home page
Route::get('/', 'myController@index');

//this grabs the about page
Route::get('about', 'myController@about');

//this grabs the stuff page
Route::get('stuff', 'myController@stuff');

//attempting to grab the form page
Route::resource('form', 'myController@form');

//talking to the form page via a put route
Route::put('form', 'myController@form');

//testing the potluck route
Route::get('potluck', function(){
  $potluck = App\potluck::find(1);
  print_r($potluck);
});
