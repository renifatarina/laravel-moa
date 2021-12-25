<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // $nama="Reni Fatarina";
        // return view('user.hello',compact('nama'));
        $first=2;
        $second=3;
        $answer=$first+$second;
        return view('user.hello', compact('answer'));
    }
}
