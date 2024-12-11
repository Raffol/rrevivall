<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PageController extends Controller
{
   public function home()
    {
        return view('homee');
    }
    public function news()
    {
        return view('404');
    }
    public function about()
    {
        return view('about');
    }
    public function events()
    {
        return view('events');
    }
    public function homee()
    {
        return view('homee');
    }
    public function organizers()
    {
        return view('organizers');
    }
    public function ourgames()
  {
      return view('404');
  }
   public function registration()
   {
      return view('registration');
    }
   public function entrance()
   {
        return view('entrance');
    }
    public function lk(){
       return view('lk');
    }
    public function auth(){
       return view('auth');
    }
}
