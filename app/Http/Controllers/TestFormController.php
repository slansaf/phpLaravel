<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
	//
	public function displayForm()
	{
		return view('myform');
	}

	public function postForm(Request $request) {
		echo $request->input('my_name');
	}
}
