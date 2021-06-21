<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       $title = 'Welcome to FICO-TECH a Robotic ICT Solution';
      // 1st way :  return view('pages.index',compact('title'));
      return view('pages.index')->with('title', $title);
   }

   public function about(){
       $title = 'About FICO TECTNOLOGIES';
    return view('pages.about')->with('title',$title);
}

public function services(){
    $data = array(
        'title'     => 'Our Services',
        'Services'  =>  ['Web-Design', 'Mobile App Design','Internet Installation', 'Access Control System']
    );
    return view('pages.services')->with($data);
}

}
