<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{ 
    function getUser(){
        return view('user');

    }
    function aboutUser(){
        return "Hello this is hello hello";
    } 
    function getUserName($name){
       $name="Anil";
       $users=['hero','sam','peter'];
       return view('/getUser',['name'=>$name,'users'=>$users]);
    }
    
    function adminPage(){
        return view("admin.login");
    }
}
