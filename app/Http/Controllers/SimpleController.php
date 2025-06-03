<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    public function test(Request $request) {
       echo $request->param;
    }
}
