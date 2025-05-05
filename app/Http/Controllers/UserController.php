<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{ 
    function getUser(){
        return "Get code step by step";
    }
    function aboutUser(){
        return "Hello this is hello hello";
    } 
    function getUserName($name){
        return "this is ". $name;
    }
}
