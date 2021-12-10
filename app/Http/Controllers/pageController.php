<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function about(){
       return view('pages.about');
   }

   public function contact(){
       return view('pages.contact');
   }

   public function brands(){
       return view('pages.brands');
   }

}
