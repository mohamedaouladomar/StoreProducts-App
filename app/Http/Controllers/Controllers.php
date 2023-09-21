<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Controllers extends Controller

{

    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
   

// public function store(Request $request)

// {
// dd( $name = $request->input('name'));
// dd( $email = $request ->input('email') );
// dd( $number = $request->input('number'));
// dd( $slct = $request->input('slct'));
// }

public function store(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $number = $request->input('number');
    $slct = $request->input('slct');

    return redirect('/save?name='.$name.'&email='.$email.'&number='.$number.'&slct='.$slct);
}

}



