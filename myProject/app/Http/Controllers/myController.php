<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    //this handles the logic for the main page
    public function index (){
      return view('layout');
    }
    //this handles the logic for the about page
    public function about (){
      $my_firstName = ['name' => 'Meander', 'email' => '@yahoo.com'];
      $my_lastName = ['name' => 'Wanderlust', 'email' => '@aol.com'];
      $my_altName = ['name' => 'Adrift', 'email' => '@about.com'];
      $peopleArray = [$my_firstName, $my_lastName, $my_altName];

      return view('about', compact('peopleArray'));
    }
    //this handles the logic for the 'stuff' page
    public function stuff (){
      $stuff1 = ['brand' => 'apple', 'type' => 'fruit'];
      $stuff2 = ['brand' => 'orange', 'type' => 'fruit'];
      $stuff3 = ['brand' => 'banana', 'type' => 'fruit'];
      $stuff4 = ['brand' => 'celery', 'type' => 'vegetable'];
      $stuff5 = ['brand' => 'cabbage', 'type' => 'vegetable'];
      $myStuff = [$stuff1, $stuff2, $stuff3, $stuff4, $stuff5];

      return view('stuff', compact('myStuff'));
    }
    //this handles the logic for the form page
    public function form (){
      return view('form');
    }

    public function update (){
      return redirect() -> action('myController@form');
      }

}
