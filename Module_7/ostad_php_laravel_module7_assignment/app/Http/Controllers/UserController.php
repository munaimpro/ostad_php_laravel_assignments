<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showGreetMessage(){
        return "Hello, Laravel!";
    }
}
