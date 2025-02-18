<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function helo() {
        return 'Hello World';
    }

    public function greeting() {
        return view ('blog.hello')
        ->with('name','Galung Erlyan Tama')
        ->with('occupation', 'Astronaut');
    }
}
