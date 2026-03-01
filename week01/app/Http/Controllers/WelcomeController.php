<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
class WelcomeController extends Controller
{
    public function hello() {
    return 'Hello World';
    }
}
class WelcomeController extends Controller
{
    public function hello(){
    return('Hello World');
    }
    public function greeting(){
    return view('blog.hello', ['name' => 'Rani Miftah']);
    }
}
    */

class WelcomeController extends Controller
{
    public function hello(){
    return('Hello World');
    }
    public function greeting(){
    return view('blog.hello')
    ->with('name','Rani Miftah')
    ->with('occupation','Astronaut');
    }
}


