<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function store(Request $request)
    {
        $userData = ['username' => $request->username, 'email' => $request->email];
        return view('hello', ['userData'=>$userData]);
    }
}
