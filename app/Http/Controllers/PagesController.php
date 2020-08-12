<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $testing= "basketball is life!";
       // return view('pages.index', compact('testing'));(this is first option to parse a value into view by adding second parameter)
       return view('pages.index')->with('testing', $testing);
    }
    public function about(){
        $testing= "I play because i love to play";
        return view('pages.about')->with('testing', $testing);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['basketballer', 'footballer', 'netballer']
        );
        return view('pages.services')->with($data);
    }
}
