<?php

//namespace App\Http\Controllers\pageController;
namespace Users\user\Downloads\perfectwheels\app\Http\Controllers

use app\Http\Controllers\pageController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


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
