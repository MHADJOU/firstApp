<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    //for page index
    function index(){
        //link about controller index and view index
        return view('main.index');
    }
    function about(){
        //link about controller index and view index
        return view('main.about');
    }
    function contact(){
        //link about controller index and view index
        return view('main.contact');
    }
}
