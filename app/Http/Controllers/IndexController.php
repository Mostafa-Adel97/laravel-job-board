<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   function index(){
    return view('index',["pageTitle"=>'Home page']);
   }
   function about(){
    return view('about',["pageTitle"=>'About page']);
   }
   function contact(){
    return view('contact',["pageTitle"=>'Contact page']);
   }
}
