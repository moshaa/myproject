<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\routing\controller;

class Secondcontroller extends Controller
{
    public function __construct(){
        $this -> middleware(middleware,'auth');
        
        
    }

    public function showstring0(){
        return'static string';
    }

    public function showstring1(){
        return'static string';
    }

    public function showstring2(){
        return'static string';
    }

    public function showstring3(){
        return'static string';
    }
}
